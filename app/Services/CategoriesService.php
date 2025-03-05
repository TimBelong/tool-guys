<?php

declare(strict_types=1);

namespace App\Services;

use GuzzleHttp\Exception\RequestException;
use App\Repositories\CategoriesRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class CategoriesService
{
    private ClientService $clientService;
    private CategoriesRepository $categoriesRepository;

    public function __construct(ClientService $clientService, CategoriesRepository $categoriesRepository)
    {
        $this->clientService = $clientService;
        $this->categoriesRepository = $categoriesRepository;
    }

    public function syncCategories(): JsonResponse
    {
        try {
            Log::info('Начинаем синхронизацию категорий');

            $token = $this->clientService->getAccessToken();

            if (!$token) {
                Log::error('Не удалось получить токен для синхронизации категорий');
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            $client = $this->clientService->getClient();
            $categoriesResponse = $client->get(
                'category/inventory',
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

            $categoriesData = json_decode($categoriesResponse->getBody()->getContents(), true)['data'] ?? [];

            $existingRentInHandIds = [];
            $processedCount = 0;

            foreach ($categoriesData as $category) {
                $this->processCategory($category, $existingRentInHandIds, $processedCount);
            }

            $deletedCount = $this->categoriesRepository->deleteMissingCategories($existingRentInHandIds);

            Log::info('Синхронизация категорий завершена', [
                'processed' => $processedCount,
                'deleted' => $deletedCount
            ]);

            return response()->json(
                [
                    'message' => 'Синхронизация завершена',
                    'processed' => $processedCount,
                    'deleted' => $deletedCount,
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

    private function processCategory(array $category, array &$existingRentInHandIds, int &$processedCount): void
    {
        $existingRentInHandIds[] = $category['id'];
        $existingCategory = $this->categoriesRepository->findByRentInHandId($category['id']);

        if ($existingCategory) {
            $this->categoriesRepository->updateFromApiData($existingCategory, $category);
        } else {
            $this->categoriesRepository->createFromApiData($category);
        }

        $processedCount++;

        if (!empty($category['children'])) {
            foreach ($category['children'] as $child) {
                $this->processCategory($child, $existingRentInHandIds, $processedCount);
            }
        }
    }
}
