<?php

namespace App\Services;

use App\Repositories\InventoryRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class InventoryService
{
    private ClientService $clientService;
    private InventoryRepository $inventoryRepository;

    public function __construct(ClientService $clientService, InventoryRepository $inventoryRepository)
    {
        $this->clientService = $clientService;
        $this->inventoryRepository = $inventoryRepository;
    }

    public function syncInventory(): JsonResponse
    {
        try {
            $token = $this->clientService->getAccessToken();

            if (!$token) {
                Log::error('Не удалось получить токен для синхронизации инвентаря');
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            Log::info('Начинаем синхронизацию инвентаря');

            $client = $this->clientService->getClient();
            $page = 1;
            $perPage = 100;
            $existingRentInHandIds = [];
            $processedCount = 0;
            $hasMorePages = true;

            // Реализуем пагинацию для обработки всех страниц результатов
            while ($hasMorePages) {
                $inventoryResponse = $client->get('inventory', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $token,
                    ],
                    'query' => [
                        'page' => $page,
                        'per_page' => $perPage,
                    ],
                ]);

                $responseData = json_decode($inventoryResponse->getBody()->getContents(), true);
                $inventoryData = $responseData['data'] ?? [];

                // Если данных меньше, чем $perPage, значит это последняя страница
                if (count($inventoryData) < $perPage) {
                    $hasMorePages = false;
                }

                foreach ($inventoryData as $item) {
                    $existingRentInHandIds[] = $item['id'];
                    $this->processInventoryItem($item, $existingRentInHandIds, $processedCount);
                }

                $page++;
            }

            // Удаляем записи, которых нет в CRM
            $deletedCount = $this->inventoryRepository->deleteMissingInventories($existingRentInHandIds);

            Log::info('Синхронизация инвентаря завершена', [
                'processed' => $processedCount,
                'deleted' => $deletedCount
            ]);

            return response()->json(
                [
                    'message' => 'Синхронизация инвентаря завершена',
                    'processed' => $processedCount,
                    'deleted' => $deletedCount,
                ]
            );
        } catch (RequestException $e) {
            Log::error('Ошибка при синхронизации инвентаря: ' . $e->getMessage(), [
                'exception' => $e
            ]);

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
        array &$existingRentInHandIds,
        int &$processedCount
    ): void {
        $existingInventory = $this->inventoryRepository->findByRentInHandId($item['id']);

        if ($existingInventory) {
            $this->inventoryRepository->updateFromApiData($existingInventory, $item);
        } else {
            $this->inventoryRepository->createFromApiData($item);
        }

        $processedCount++;
    }
}