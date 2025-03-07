<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\UserHasPurchaseItems;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PurchaseListRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return UserHasPurchaseItems::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return UserHasPurchaseItems::find($id);
    }

    public function create($attributes): Model
    {
        return UserHasPurchaseItems::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return UserHasPurchaseItems::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return UserHasPurchaseItems::find($id)->delete();
    }
}