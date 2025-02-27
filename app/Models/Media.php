<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $rent_in_hand_id
 * @property int    $inventory_id
 * @property string $url
 */
class Media extends Model
{
    use HasFactory;

    protected $table = 'media';

    protected $fillable = [
        'rent_in_hand_id',
        'inventory_id',
        'url',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
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

    public function getInventoryId(): int
    {
        return $this->inventory_id;
    }

    public function setInventoryId(int $inventory_id): void
    {
        $this->inventory_id = $inventory_id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}
