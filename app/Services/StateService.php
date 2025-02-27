<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\StatesRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;

class StateService
{
    private ClientService $clientService;
    private StatesRepository $statesRepository;

    public function __construct(ClientService $clientService, StatesRepository $statesRepository)
    {
        $this->clientService = $clientService;
        $this->statesRepository = $statesRepository;
    }

    public function syncStates(): JsonResponse
    {
        try {
            $token = $this->clientService->getAccessToken();

            if (!$token) {
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            $client = $this->clientService->getClient();
            $statesResponse = $client->get(
                'inventory/state',
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

            $stateData = json_decode($statesResponse->getBody()->getContents(), true)['data'] ?? [];
            $existingRentInHandIds = [];
            $processedCount = 0;

            foreach ($stateData as $item) {
                $this->processStatesItem($item, $existingRentInHandIds, $processedCount);
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
    private function processStatesItem(
        array $item,
        array &$existingRentInHandIds,
        int &$processedCount
    ): void {
        $existingInventory = $this->statesRepository->findByRentInHandId($item['id']);

        if ($existingInventory) {
            $this->statesRepository->updateFromApiData($existingInventory, $item);
        } else {
            $this->statesRepository->createFromApiData($item);
        }
    }
}
