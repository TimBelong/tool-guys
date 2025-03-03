<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $inventory_id
 * @property int    $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class UserHasFavorites extends Model
{
    use HasFactory;

    protected $table = 'user_has_favorites';
    protected $fillable
        = [
            'inventory_id',
            'user_id',
        ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getInventoryId(): int
    {
        return $this->inventory_id;
    }

    public function setInventoryId(int $inventory_id): void
    {
        $this->inventory_id = $inventory_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }
}
