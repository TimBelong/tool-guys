<?php

namespace App\Services;

use App\Models\Rents;
use App\Repositories\InventoryRepository;
use App\Repositories\RentsRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;

class RentsService
{
    private ClientService $clientService;
    private InventoryRepository $inventoryRepository;
    private RentsRepository $rentsRepository;

    public function __construct()
    {
        $this->clientService = app(ClientService::class);
        $this->inventoryRepository = app(InventoryRepository::class);
        $this->rentsRepository = app(RentsRepository::class);
    }

    public function syncRents(): JsonResponse
    {
        try {
            $token = $this->clientService->getAccessToken();

            if (!$token) {
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            $client = $this->clientService->getClient();
            $rentsResponse = $client->get('rent', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'page' => 1,
                    'per_page' => 100,
                ],
            ]);

            $rentsData = json_decode($rentsResponse->getBody()->getContents(), true)['data'] ?? [];

            $createdCount = 0;
            $skippedCount = 0;

            foreach ($rentsData as $rentData) {
                $rentInHandId = $rentData['id'];

                $existingRent = $this->rentsRepository->findByRentInHandId($rentInHandId);

                if ($existingRent) {
                    $skippedCount++;
                    continue;
                }

                if (empty($rentData['inventories']) || !isset($rentData['inventories'][0]['id'])) {
                    $skippedCount++;
                    continue;
                }

                $inventoryRentInHandId = $rentData['inventories'][0]['inventory_id'];
                $inventory = $this->inventoryRepository->findByRentInHandId($inventoryRentInHandId);

                if (!$inventory) {
                    $skippedCount++;
                    continue;
                }

                $userId = 1;

                $timeStart = new \DateTime($rentData['time_start']);
                $timeEnd = new \DateTime($rentData['time_end']);

                $this->rentsRepository->create(
                    [
                        'rent_in_hand_id' => $rentInHandId,
                        'time_start' => $timeStart,
                        'time_end' => $timeEnd,
                        'user_id' => $userId,
                        'inventory_id' => $inventory->getId(),
                    ]
                );

                $createdCount++;
            }

            return response()->json(
                [
                    'message' => 'Синхронизация аренд завершена',
                    'created' => $createdCount,
                    'skipped' => $skippedCount,
                    'total' => count($rentsData),
                ]
            );
        } catch (RequestException $e) {
            return response()->json(
                [
                    'error' => 'Ошибка при работе с API',
                    'message' => $e->getMessage(),
                ],
                500
            );
        }
    }
}