<?php

namespace App\Services;

use App\Repositories\ProductsRepository;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class ProductsService
{
    private ClientService $clientService;
    private ProductsRepository $productsRepository;

    public function __construct(ClientService $clientService, ProductsRepository $productsRepository)
    {
        $this->clientService = $clientService;
        $this->productsRepository = $productsRepository;
    }

    public function syncProducts(): JsonResponse
    {
        try {
            $token = $this->clientService->getAccessToken();

            if (!$token) {
                Log::error('Не удалось получить токен для синхронизации продуктов');
                return response()->json(['error' => 'Не удалось получить токен'], 401);
            }

            Log::info('Начинаем синхронизацию продуктов');

            $client = $this->clientService->getClient();
            $page = 1;
            $perPage = 200;
            $existingRentInHandIds = [];
            $processedCount = 0;
            $hasMorePages = true;

            while ($hasMorePages) {
                $productResponse = $client->get('product', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $token,
                    ],
                    'query' => [
                        'page' => $page,
                        'per_page' => $perPage,
                    ],
                ]);

                $responseData = json_decode($productResponse->getBody()->getContents(), true);
                $productData = $responseData['data'] ?? [];

                // Если данных меньше, чем $perPage, значит это последняя страница
                if (count($productData) < $perPage) {
                    $hasMorePages = false;
                }

                foreach ($productData as $item) {
                    $existingRentInHandIds[] = $item['id'];
                    $this->processProductItem($item);
                    $processedCount++;
                }

                $page++;
            }

            $deletedCount = $this->deleteMissingProducts($existingRentInHandIds);

            Log::info('Синхронизация продуктов завершена', [
                'processed' => $processedCount,
                'deleted' => $deletedCount
            ]);

            return response()->json(
                [
                    'message' => 'Синхронизация продуктов завершена',
                    'processed' => $processedCount,
                    'deleted' => $deletedCount,
                ]
            );
        } catch (RequestException $e) {
            Log::error('Ошибка при синхронизации продуктов: ' . $e->getMessage(), [
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

    private function processProductItem(array $item): void
    {
        $existingProduct = $this->productsRepository->findByRentInHandId($item['id']);

        if ($existingProduct) {
            $this->updateProductFromApiData($existingProduct, $item);
        } else {
            $this->createProductFromApiData($item);
        }
    }

    private function createProductFromApiData(array $data)
    {
        return $this->productsRepository->create([
                                                     'rent_in_hand_id' => $data['id'],
                                                     'title' => $data['title'] ?? '',
                                                     'avatar' => $data['avatar'] ?? null,
                                                     'description' => $data['description'] ?? null,
                                                     'count' => $data['count'] ?? 0,
                                                     'price' => $data['price'] ?? 0,
                                                 ]);
    }

    private function updateProductFromApiData($product, array $data): bool
    {
        return $this->productsRepository->update($product->getId(), [
            'title' => $data['title'] ?? '',
            'avatar' => $data['avatar'] ?? null,
            'description' => $data['description'] ?? null,
            'count' => $data['count'] ?? 0,
            'price' => $data['price'] ?? 0,
        ]);
    }

    private function deleteMissingProducts(array $existingRentInHandIds): int
    {
        return \App\Models\Product::whereNotIn('rent_in_hand_id', $existingRentInHandIds)->delete();
    }

    // Метод для получения данных о продуктах (можно использовать для API)
    public function getMarket(): JsonResponse
    {
        try {
            $products = $this->productsRepository->all();

            return response()->json([
                                        'success' => true,
                                        'data' => $products
                                    ]);
        } catch (\Exception $e) {
            Log::error('Ошибка при получении продуктов: ' . $e->getMessage(), [
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
}