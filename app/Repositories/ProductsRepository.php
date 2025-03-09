<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProductsRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return Product::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return Product::find($id);
    }

    public function create($attributes): Model
    {
        return Product::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return Product::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return Product::find($id)->delete();
    }

    public function findByRentInHandId(int $rentInHandId): ?Product
    {
        return Product::where('rent_in_hand_id', $rentInHandId)->first();
    }

}