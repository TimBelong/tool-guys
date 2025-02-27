<?php

namespace App\Services;

use App\Repositories\InventoryRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;

class InventoryService
{
    private ClientService $clientService;
    private InventoryRepository $inventoryRepository;

    public function __construct()
    {
        $this->clientService = app(ClientService::class);
        $this->inventoryRepository = app(InventoryRepository::class);
    }

    public function syncInventory(): JsonResponse
    {
        try {
            $token = $this->clientService->getAccessToken();

            if (!$token) {
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            $client = $this->clientService->getClient();
            $inventoryResponse = $client->get('inventory', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'page' => 1,
                    'per_page' => 100,
                ],
            ]);

            $inventoryData = json_decode($inventoryResponse->getBody()->getContents(), true)['data'] ?? [];
            dd($inventoryData[0]['media']);
            $existingRentInHandIds = [];
            $processedCount = 0;

            foreach ($inventoryData as $item) {
                $this->processInventoryItem($item, $this->inventoryRepository, $existingRentInHandIds, $processedCount);
            }

//            $deletedCount = $this->inventoryRepository->deleteMissingInventories($existingRentInHandIds);

            return response()->json(
                [
                    'message' => 'Синхронизация завершена',
                    'processed' => $processedCount,
//                    'deleted' => $deletedCount,
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

    private function processInventoryItem(
        array $item,
        InventoryRepository $repository,
        array &$existingRentInHandIds,
        int &$processedCount
    ): void {
        $existingInventory = $repository->findByRentInHandId($item['id']);

        if ($existingInventory) {
            $repository->updateFromApiData($existingInventory, $item);
        } else {
            $repository->createFromApiData($item);
        }
    }
}