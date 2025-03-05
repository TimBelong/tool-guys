<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Media;
use App\Models\States;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class MediaRepository extends AbstractRepository
{
    public function all(): Collection|array
    {
        return Media::all();
    }

    public function find($id): Model|Collection|array|null
    {
        return Media::find($id);
    }

    public function create($attributes): Model
    {
        return Media::create($attributes);
    }

    public function update($id, array $attributes): bool|null
    {
        return Media::find($id)->update($attributes);
    }

    public function delete($id): ?bool
    {
        return Media::find($id)->delete();
    }

    public function findByRentInHandId(int $rentInHandId): ?Media
    {
        return Media::where('rent_in_hand_id', $rentInHandId)->first();
    }

    public function deleteMissingMedia(array $existingRentInHandIds): int
    {
        return Media::whereNotIn('rent_in_hand_id', $existingRentInHandIds)->delete();
    }

}