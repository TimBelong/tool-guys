<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\InventoryRepository;
use App\Repositories\MediaRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

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
                Log::error('Не удалось получить токен для синхронизации медиа');
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            Log::info('Начинаем синхронизацию медиа');

            $client = $this->clientService->getClient();
            $page = 1;
            $perPage = 100;
            $processedCount = 0;
            $hasMorePages = true;
            $createdMediaIds = [];

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
                    $inventory = $this->inventoryRepository->findByRentInHandId($item['id']);
                    if (!$inventory) {
                        continue;
                    }

                    foreach ($item['media'] ?? [] as $mediaItem) {
                        // Проверяем, существует ли уже такая медиа запись
                        $existingMedia = $this->mediaRepository->findByRentInHandId($mediaItem['id']);

                        if ($existingMedia) {
                            // Обновляем существующую запись
                            $this->mediaRepository->update($existingMedia->getId(), [
                                'url' => $mediaItem['full_src'],
                                'inventory_id' => $inventory->getId(),
                            ]);
                        } else {
                            // Создаем новую запись
                            $this->mediaRepository->create([
                                                               'rent_in_hand_id' => $mediaItem['id'],
                                                               'inventory_id' => $inventory->getId(),
                                                               'url' => $mediaItem['full_src'],
                                                           ]);
                        }

                        $createdMediaIds[] = $mediaItem['id'];
                        $processedCount++;
                    }
                }

                $page++;
            }

            // Удаляем медиа, которых нет в CRM
            $deletedCount = $this->deleteOldMedia($createdMediaIds);

            Log::info('Синхронизация медиа завершена', [
                'processed' => $processedCount,
                'deleted' => $deletedCount
            ]);

            return response()->json([
                                        'message' => 'Синхронизация медиа завершена',
                                        'processed' => $processedCount,
                                        'deleted' => $deletedCount,
                                    ]);
        } catch (RequestException $e) {
            Log::error('Ошибка при синхронизации медиа: ' . $e->getMessage(), [
                'exception' => $e
            ]);

            return response()->json
            ([
                                        'error' => 'Ошибка при работе с API',
                                        'message' => $e->getMessage(),
                                    ], 500);
        }
    }

    private function deleteOldMedia(array $existingRentInHandIds): int
    {
        return $this->mediaRepository->deleteMissingMedia($existingRentInHandIds);
    }
}