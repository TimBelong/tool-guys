<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\InventoryRepository;
use App\Repositories\MediaRepository;
use App\Repositories\OptionsRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;

class OptionsService
{
    private ClientService $clientService;
    private OptionsRepository $optionsRepository;
    private InventoryRepository $inventoryRepository;

    public function __construct(ClientService $clientService, OptionsRepository $optionsRepository, InventoryRepository $inventoryRepository)
    {
        $this->clientService = $clientService;
        $this->optionsRepository = $optionsRepository;
        $this->inventoryRepository = $inventoryRepository;
    }

    public function syncOptions(): JsonResponse
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

                foreach ($item['option'] ?? [] as $optionItem) {
                    $this->optionsRepository->create(
                        [
                            'inventory_id' => $inventory->getId(),
                            'title' => $optionItem['title'],
                            'value' => $optionItem['value']
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
