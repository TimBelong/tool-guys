<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int         $id
 * @property int         $rent_in_hand_id
 * @property int|null    $parent_id
 * @property string      $title
 * @property int|null    $count_inventory
 * @property float|null  $sum_deposit
 * @property float|null  $prices
 * @property float|null  $discounts
 * @property Inventory   $inventory
 */
class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'rent_in_hand_id',
        'parent_id',
        'title',
        'count_inventory',
        'sum_deposit',
        'prices',
        'discounts',
    ];

    protected $casts = [
        'sum_deposit' => 'decimal:2',
        'prices' => 'decimal:2',
        'discounts' => 'decimal:2',
    ];

    public function parent()
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'category_id');
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

    public function getParentId(): ?int
    {
        return $this->parent_id;
    }

    public function setParentId(?int $parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getCountInventory(): ?int
    {
        return $this->count_inventory;
    }

    public function setCountInventory(?int $count_inventory): void
    {
        $this->count_inventory = $count_inventory;
    }

    public function getSumDeposit(): ?float
    {
        return $this->sum_deposit;
    }

    public function setSumDeposit(?float $sum_deposit): void
    {
        $this->sum_deposit = $sum_deposit;
    }

    public function getPrices(): ?float
    {
        return $this->prices;
    }

    public function setPrices(?float $prices): void
    {
        $this->prices = $prices;
    }

    public function getDiscounts(): ?float
    {
        return $this->discounts;
    }

    public function setDiscounts(?float $discounts): void
    {
        $this->discounts = $discounts;
    }
}
