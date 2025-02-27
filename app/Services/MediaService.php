<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\InventoryRepository;
use App\Repositories\MediaRepository;
use App\Repositories\StatesRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;

class MediaService
{
    private ClientService $clientService;
    private MediaRepository $mediaRepository;
    private InventoryRepository $inventoryRepository;

    public function __construct(ClientService $clientService, MediaRepository $mediaRepository, InventoryRepository $inventoryRepository)
    {
        $this->clientService = $clientService;
        $this->mediaRepository = $mediaRepository;
        $this->inventoryRepository = $inventoryRepository;
    }

    public function syncMedia(): JsonResponse
    {
        try {
            $token = $this->clientService->getAccessToken();

            if (!$token) {
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            $client = $this->clientService->getClient();
            $inventoryResponse = $client->get(
                'inventory',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $token,
                    ],
                    'query' => [
                        'page' => 1,
                        'per_page' => 100,
                    ],
                ]
            );

            $inventoryData = json_decode($inventoryResponse->getBody()->getContents(), true)['data'] ?? [];
            $processedCount = 0;

            foreach ($inventoryData as $item) {
                $inventory = $this->inventoryRepository->findByRentInHandId($item['id']);
                if (!$inventory) {
                    continue;
                }

                foreach ($item['media'] ?? [] as $mediaItem) {
                    $this->mediaRepository->create(
                        [
                            'rent_in_hand_id' => $mediaItem['id'],
                            'inventory_id' => $inventory->getId(),
                            'url' => $mediaItem['full_src'],
                        ]
                    );
                    $processedCount++;
                }
            }

            return response()->json(
                [
                    'message' => 'Синхронизация завершена',
                    'processed' => $processedCount,
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
