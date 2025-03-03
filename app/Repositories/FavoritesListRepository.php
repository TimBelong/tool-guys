<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\UserHasFavorites;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FavoritesListRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return UserHasFavorites::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return UserHasFavorites::find($id);
    }

    public function create($attributes): Model
    {
        return UserHasFavorites::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return UserHasFavorites::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return UserHasFavorites::find($id)->delete();
    }
}