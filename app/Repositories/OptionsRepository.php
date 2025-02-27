<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Options;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class OptionsRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return Options::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return Options::find($id);
    }

    public function create($attributes): Model
    {
        return Options::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return Options::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return Options::find($id)->delete();
    }

    public function findByRentInHandId(int $rentInHandId): ?Options
    {
        return Options::where('rent_in_hand_id', $rentInHandId)->first();
    }
}