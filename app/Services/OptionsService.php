<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\InventoryRepository;
use App\Repositories\OptionsRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class OptionsService
{
    private ClientService $clientService;
    private OptionsRepository $optionsRepository;
    private InventoryRepository $inventoryRepository;

    public function __construct(
        ClientService $clientService,
        OptionsRepository $optionsRepository,
        InventoryRepository $inventoryRepository
    ) {
        $this->clientService = $clientService;
        $this->optionsRepository = $optionsRepository;
        $this->inventoryRepository = $inventoryRepository;
    }

    public function syncOptions(): JsonResponse
    {
        try {
            $token = $this->clientService->getAccessToken();

            if (!$token) {
                Log::error('Не удалось получить токен для синхронизации опций');

                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            Log::info('Начинаем синхронизацию опций');

            $client = $this->clientService->getClient();
            $page = 1;
            $perPage = 100;
            $processedCount = 0;
            $deletedCount = 0;
            $hasMorePages = true;

            // Для каждого инвентаря будем хранить список актуальных названий опций
            $inventoryOptionTitles = [];

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

                    $inventoryId = $inventory->getId();

                    // Инициализируем массив для названий опций этого инвентаря, если его еще нет
                    if (!isset($inventoryOptionTitles[$inventoryId])) {
                        $inventoryOptionTitles[$inventoryId] = [];
                    }

                    if (isset($item['option']) && is_array($item['option'])) {
                        foreach ($item['option'] as $optionItem) {
                            // Пропускаем опции без заголовка, если это обязательное поле
                            if (!isset($optionItem['title']) || empty($optionItem['title'])) {
                                continue;
                            }

                            $title = $optionItem['title'];
                            $value = $optionItem['value'] ?? '';

                            // Добавляем название опции в список для этого инвентаря
                            $inventoryOptionTitles[$inventoryId][] = $title;

                            // Поиск существующей опции по inventory_id и title
                            $existingOption = $this->optionsRepository->findByInventoryAndTitle($inventoryId, $title);

                            if ($existingOption) {
                                // Обновляем существующую опцию
                                $this->optionsRepository->update($existingOption->getId(), [
                                    'value' => $value
                                ]);
                            } else {
                                // Создаем новую опцию
                                $this->optionsRepository->create([
                                                                     'inventory_id' => $inventoryId,
                                                                     'title' => $title,
                                                                     'value' => $value
                                                                 ]);
                            }

                            $processedCount++;
                        }
                    }
                }

                $page++;
            }

            // Удаляем устаревшие опции для каждого инвентаря
            foreach ($inventoryOptionTitles as $inventoryId => $titles) {
                if (!empty($titles)) {
                    $deleted = $this->optionsRepository->deleteOptionsNotInTitles($inventoryId, $titles);
                    $deletedCount += $deleted;
                }
            }

            Log::info('Синхронизация опций завершена', [
                'processed' => $processedCount,
                'deleted' => $deletedCount,
            ]);

            return response()->json([
                                        'message' => 'Синхронизация опций завершена',
                                        'processed' => $processedCount,
                                        'deleted' => $deletedCount,
                                    ]);
        } catch (RequestException $e) {
            Log::error('Ошибка при синхронизации опций: ' . $e->getMessage(), [
                'exception' => $e,
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
}