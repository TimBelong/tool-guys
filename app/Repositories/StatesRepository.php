<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Categories;
use App\Models\Inventory;
use App\Models\States;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class StatesRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return States::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return States::find($id);
    }

    public function create($attributes): Model
    {
        return States::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return States::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return States::find($id)->delete();
    }

    public function findByRentInHandId(int $rentInHandId): ?States
    {
        return States::where('rent_in_hand_id', $rentInHandId)->first();
    }

    public function createFromApiData(array $data): States
    {
        return States::create(
            [
                'rent_in_hand_id' => $data['id'],
                'title'=> $data['title'] ?? null,
                'const'=> $data['const'] ?? null,
                'is_system_status' => $data['is_system_status'] ?? null,
                'color' => $data['color'] ?? null,
                'text_color' => $data['text_color'] ?? null,
            ]
        );
    }

    public function updateFromApiData(States $state, array $data): bool
    {
        return $state->update(
            [
                'title'=> $data['title'] ?? null,
                'const'=> $data['const'] ?? null,
                'is_system_status' => $data['is_system_status'] ?? null,
                'color' => $data['color'] ?? null,
                'text_color' => $data['text_color'] ?? null,
            ]
        );
    }
}