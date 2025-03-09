<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SyncService
{
    private CategoriesService $categoriesService;
    private StateService $stateService;
    private InventoryService $inventoryService;
    private MediaService $mediaService;
    private OptionsService $optionsService;
    private RentsService $rentsService;
    private ProductsService $productsService;

    public function __construct(
        CategoriesService $categoriesService,
        StateService $stateService,
        InventoryService $inventoryService,
        MediaService $mediaService,
        OptionsService $optionsService,
        RentsService $rentsService,
        ProductsService $productsService
    ) {
        $this->categoriesService = $categoriesService;
        $this->stateService = $stateService;
        $this->inventoryService = $inventoryService;
        $this->mediaService = $mediaService;
        $this->optionsService = $optionsService;
        $this->rentsService = $rentsService;
        $this->productsService = $productsService;
    }

    public function syncAll(): JsonResponse
    {
        try {
            DB::beginTransaction();

            Log::info('Начинаем полную синхронизацию данных');

            $categoryResult = $this->categoriesService->syncCategories();
            $stateResult = $this->stateService->syncStates();
            $inventoryResult = $this->inventoryService->syncInventory();
            $mediaResult = $this->mediaService->syncMedia();
            $optionsResult = $this->optionsService->syncOptions();
            $rentsResult = $this->rentsService->syncRents();
            $productsResult = $this->productsService->syncProducts();

            DB::commit();

            Log::info('Синхронизация данных успешно завершена');

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Синхронизация всех данных успешно завершена',
                    'details' => [
                        'categories' => json_decode($categoryResult->getContent(), true),
                        'states' => json_decode($stateResult->getContent(), true),
                        'inventory' => json_decode($inventoryResult->getContent(), true),
                        'media' => json_decode($mediaResult->getContent(), true),
                        'options' => json_decode($optionsResult->getContent(), true),
                        'rents' => json_decode($rentsResult->getContent(), true),
                        'products' => json_decode($productsResult->getContent(), true),
                    ],
                ]
            );
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Ошибка при синхронизации данных: ' . $e->getMessage(), [
                'exception' => $e,
            ]);

            return response()->json(
                [
                    'success' => false,
                    'message' => 'Произошла ошибка при синхронизации данных',
                    'error' => $e->getMessage(),
                ],
                500
            );
        }
    }
}