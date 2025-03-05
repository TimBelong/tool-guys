<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int       $id
 * @property int       $rent_in_hand_id
 * @property \DateTime $time_start
 * @property \DateTime $time_end
 * @property int       $user_id
 * @property int       $inventory_id
 * @property float     $total_amount
 * @property User      $user
 * @property Inventory $inventory
 */
class Rents extends Model
{
    use HasFactory;

    protected $table = 'rents';
    protected $fillable
        = [
            'rent_in_hand_id',
            'time_start',
            'time_end',
            'user_id',
            'inventory_id',
            'total_amount',
        ];
    protected $casts
        = [
            'time_start' => 'datetime',
            'time_end' => 'datetime',
            'total_amount' => 'decimal:2'
        ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRentInHandId(): int
    {
        return $this->rent_in_hand_id;
    }

    public function setRentInHandId(int $rent_in_hand_id): void
    {
        $this->rent_in_hand_id = $rent_in_hand_id;
    }

    public function getTimeStart(): \DateTime
    {
        return $this->time_start;
    }

    public function setTimeStart(\DateTime $time_start): void
    {
        $this->time_start = $time_start;
    }

    public function getTimeEnd(): \DateTime
    {
        return $this->time_end;
    }

    public function setTimeEnd(\DateTime $time_end): void
    {
        $this->time_end = $time_end;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getInventoryId(): int
    {
        return $this->inventory_id;
    }

    public function setInventoryId(int $inventory_id): void
    {
        $this->inventory_id = $inventory_id;
    }

    public function getTotalAmount(): ?float
    {
        return $this->total_amount;
    }

    public function setTotalAmount(?float $total_amount): void
    {
        $this->total_amount = $total_amount;
    }
}