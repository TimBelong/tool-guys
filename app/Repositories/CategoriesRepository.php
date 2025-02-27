<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CategoriesRespository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return Categories::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return Categories::find($id);
    }

    public function create($attributes): Model
    {
        return Categories::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return Categories::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return Categories::find($id)->delete();
    }

    public function findByRentInHandId(int $rentInHandId): ?Categories
    {
        return Categories::where('rent_in_hand_id', $rentInHandId)->first();
    }

    public function createFromApiData(array $data): Categories
    {
        return Categories::create(
            [
                'rent_in_hand_id' => $data['id'],
                'parent_id' => $data['parent_id'] ?? null,
                'title' => $data['title'],
                'sum_deposit' => $data['sum_deposit'] ?? null,
                'prices' => !empty($data['prices']) ? $data['prices'][0] : null,
                'discounts' => !empty($data['discounts']) ? $data['discounts'][0] : null,
            ]
        );
    }

    public function updateFromApiData(Categories $category, array $data): bool
    {
        return $category->update(
            [
                'parent_id' => $data['parent_id'] ?? null,
                'title' => $data['title'],
                'sum_deposit' => $data['sum_deposit'] ?? null,
                'prices' => !empty($data['prices']) ? $data['prices'][0] : null,
                'discounts' => !empty($data['discounts']) ? $data['discounts'][0] : null,
            ]
        );
    }

    public function deleteMissingCategories(array $existingRentInHandIds): int
    {
        return Categories::whereNotIn('rent_in_hand_id', $existingRentInHandIds)->delete();
    }

}