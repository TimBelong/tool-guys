<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
    abstract public function all(): Collection|array;

    abstract public function find($id): Collection|array|null|Model;

    abstract public function create($attributes): Model;

    abstract public function update($id, array $attributes): bool|null;

    abstract public function delete($id): ?bool;
}