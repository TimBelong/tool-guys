<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Rents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class RentsRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return Rents::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return Rents::find($id);
    }

    public function create($attributes): Model
    {
        return Rents::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return Rents::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return Rents::find($id)->delete();
    }

    public function findByRentInHandId(int $rentInHandId): ?Rents
    {
        return Rents::where('rent_in_hand_id', $rentInHandId)->first();
    }
}