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

}