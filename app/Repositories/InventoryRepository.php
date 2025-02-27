<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class InventoryRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return Inventory::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return Inventory::find($id);
    }

    public function create($attributes): Model
    {
        return Inventory::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return Inventory::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return Inventory::find($id)->delete();
    }

    public function findByRentInHandId(int $rentInHandId): ?Inventory
    {
        return Inventory::where('rent_in_hand_id', $rentInHandId)->first();
    }

    public function createFromApiData(array $data): Inventory
    {
        $category = app(CategoriesRepository::class)->findByRentInHandId($data['category']['id']);
        $state = isset($data['state']['id'])
            ? app(StatesRepository::class)->findByRentInHandId($data['state']['id'])
            : null;

        return Inventory::create(
            [
                'rent_in_hand_id' => $data['id'],
                'title' => $data['title'] ?? null,
                'avatar' => $data['avatar'] ?? null,
                'article_number' => $data['article_number'] ?? null,
                'description' => $data['description'] ?? null,
                'rent_number' => $data['rent_number'] ?? null,
                'buy_date' => $data['buy_date'] ?? null,
                'buy_price' => $data['buy_price'] ?? null,
                'amount_rent_sum' => $data['amount_rent_sum'] ?? null,
                'cash_deposit' => $data['cash_deposit'] ?? null,
                'option_id' => $data['option']['id'] ?? null,
                'category_id' => $category?->getId(),
                'state_id' => $state?->getId(),
                //                'point_id' => $data['point']['id'] ?? null,
                //                'discounts' => !empty($data['discounts']) ? $data['discounts'][0] : null,
                'another' => $data['another'] ?? null,
                'children_count' => $data['children_count'] ?? null,
                'sum_amount_payment' => $data['sum_amount_payment'] ?? null,
                'is_group' => $data['is_group'] ?? false,
                //                'children_id' => !empty($data['children']) ? $data['children'][0]['id'] : null,
                'services' => $data['services'] ?? false,
                'is_occupied' => $data['is_occupied'] ?? false,
            ]
        );
    }

    public function updateFromApiData(Inventory $inventory, array $data): bool
    {
        $category = app(CategoriesRepository::class)->findByRentInHandId($data['category']['id']);
        $state = app(StatesRepository::class)->findByRentInHandId($data['state']['id']);

        return $inventory->update(
            [
                'title' => $data['title'] ?? null,
                'avatar' => $data['avatar'] ?? null,
                'article_number' => $data['article_number'] ?? null,
                'description' => $data['description'] ?? null,
                'rent_number' => $data['rent_number'] ?? null,
                'buy_date' => $data['buy_date'] ?? null,
                'buy_price' => $data['buy_price'] ?? null,
                'amount_rent_sum' => $data['amount_rent_sum'] ?? null,
                'cash_deposit' => $data['cash_deposit'] ?? null,
                'option_id' => $data['option']['id'] ?? null,
                'category_id' => $category->getId(),
                'state_id' => $state->getId(),
                //                'point_id' => $data['point']['id'] ?? null,
                //                'discounts' => !empty($data['discounts']) ? $data['discounts'][0] : null,
                'another' => $data['another'] ?? null,
                'children_count' => $data['children_count'] ?? null,
                'sum_amount_payment' => $data['sum_amount_payment'] ?? null,
                'is_group' => $data['is_group'] ?? false,
                //                'children_id' => !empty($data['children']) ? $data['children'][0]['id'] : null,
                'services' => $data['services'] ?? false,
                'is_occupied' => $data['is_occupied'] ?? false,
            ]
        );
    }

    public function deleteMissingInventories(array $existingRentInHandIds): int
    {
        return Inventory::whereNotIn('rent_in_hand_id', $existingRentInHandIds)->delete();
    }

    public function getLatestInventories(int $limit = 6): Collection
    {
        return Inventory::query()->orderBy('rent_in_hand_id', 'desc')->limit($limit)->get();
    }

    public function getTopRentedInventories(int $limit = 5): Collection
    {
        return Inventory::query()->orderByDesc('count_rents')->limit($limit)->get();
    }
}