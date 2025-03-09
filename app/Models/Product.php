<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

/**
 * @property int         $id
 * @property int         $rent_in_hand_id
 * @property string      $title
 * @property string|null $avatar
 * @property string|null $description
 * @property int         $count
 * @property string       $price
 * @eproperty Carbon      $created_at
 * @property Carbon      $updated_at
 */
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'rent_in_hand_id',
        'title',
        'avatar',
        'description',
        'count',
        'price',
    ];

    protected $casts = [
        'rent_in_hand_id' => 'integer',
        'count' => 'integer',
        'price' => 'decimal:2',
    ];

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'user_has_product_favorites',
            'product_id',
            'user_id'
        );
    }

    public function purchaseList(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'user_has_product_items',
            'product_id',
            'user_id'
        );
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): void
    {
        $this->avatar = $avatar;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }
}