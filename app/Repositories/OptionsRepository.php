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

    // Метод поиска опции по inventory_id и title
    public function findByInventoryAndTitle(int $inventoryId, string $title): ?Options
    {
        return Options::where('inventory_id', $inventoryId)
            ->where('title', $title)
            ->first();
    }

    // Удаляем все опции для конкретного инвентаря
    public function deleteByInventoryId(int $inventoryId): int
    {
        return Options::where('inventory_id', $inventoryId)->delete();
    }

    // Удаляем опции по ID инвентаря, кроме тех, которые в списке названий
    public function deleteOptionsNotInTitles(int $inventoryId, array $titles): int
    {
        return Options::where('inventory_id', $inventoryId)
            ->whereNotIn('title', $titles)
            ->delete();
    }
}