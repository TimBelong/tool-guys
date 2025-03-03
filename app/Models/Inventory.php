<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

/**
 * @property int         $id
 * @property int         $rent_in_hand_id
 * @property int|null    $parent_id
 * @property string|null $title
 * @property string|null $avatar
 * @property int|null    $article_number
 * @property string|null $description
 * @property int|null    $rent_number
 * @property Carbon|null $buy_date
 * @property string|null $buy_price
 * @property float|null  $amount_rent_sum
 * @property float|null  $cash_deposit
 * @property int|null    $option_id
 * @property int|null    $category_id
 * @property int|null    $state_id
 * @property int|null    $point_id
 * @property float|null  $discounts
 * @property int|null    $another
 * @property int|null    $children_count
 * @property int|null    $sum_amount_payment
 * @property bool|null   $is_group
 * @property int|null    $children_id
 * @property bool|null   $services
 * @property bool|null   $is_occupied
 * @property int|null    $count_free_children
 * @property Carbon      $created_at
 * @property Carbon      $updated_at
 * @property Rents       $rents
 */
class Inventory extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'inventories';
    protected $fillable
        = [
            'rent_in_hand_id',
            'parent_id',
            'title',
            'avatar',
            'article_number',
            'description',
            'rent_number',
            'buy_date',
            'buy_price',
            'amount_rent_sum',
            'cash_deposit',
            'option_id',
            'category_id',
            'state_id',
            'point_id',
            'discounts',
            'another',
            'children_count',
            'sum_amount_payment',
            'is_group',
            'children_id',
            'services',
            'is_occupied',
            'count_free_children',
        ];
    protected $casts
        = [
            'buy_date' => 'date',
            'buy_price' => 'decimal:2',
            'amount_rent_sum' => 'decimal:2',
            'cash_deposit' => 'decimal:2',
            'discounts' => 'decimal:2',
            'is_group' => 'boolean',
            'services' => 'boolean',
            'is_occupied' => 'boolean',
        ];

    public function options()
    {
        return $this->hasMany(Options::class, 'inventory_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function state()
    {
        return $this->belongsTo(States::class, 'state_id');
    }

    public function point()
    {
        return $this->belongsTo(Points::class, 'point_id');
    }

    public function children()
    {
        return $this->belongsTo(Inventory::class, 'children_id');
    }

    public function parent()
    {
        return $this->belongsTo(Inventory::class, 'parent_id');
    }

    public function media()
    {
        return $this->hasMany(Media::class, 'inventory_id');
    }

    public function rents()
    {
        return $this->hasMany(Rents::class, 'inventory_id');
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'user_has_favorites',
            'inventory_id',
            'user_id'
        );
    }

    public function purchaseList(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'user_has_purchase_items',
            'inventory_id',
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

    public function getParentId(): ?int
    {
        return $this->parent_id;
    }

    public function setParentId(?int $parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
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

    public function getArticleNumber(): ?int
    {
        return $this->article_number;
    }

    public function setArticleNumber(?int $article_number): void
    {
        $this->article_number = $article_number;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getRentNumber(): ?int
    {
        return $this->rent_number;
    }

    public function setRentNumber(?int $rent_number): void
    {
        $this->rent_number = $rent_number;
    }

    public function getBuyDate(): ?Carbon
    {
        return $this->buy_date;
    }

    public function setBuyDate(?Carbon $buy_date): void
    {
        $this->buy_date = $buy_date;
    }

    public function getBuyPrice(): ?string
    {
        return $this->buy_price;
    }

    public function setBuyPrice(?string $buy_price): void
    {
        $this->buy_price = $buy_price;
    }

    public function getAmountRentSum(): ?float
    {
        return $this->amount_rent_sum;
    }

    public function setAmountRentSum(?float $amount_rent_sum): void
    {
        $this->amount_rent_sum = $amount_rent_sum;
    }

    public function getCashDeposit(): ?float
    {
        return $this->cash_deposit;
    }

    public function setCashDeposit(?float $cash_deposit): void
    {
        $this->cash_deposit = $cash_deposit;
    }

    public function getOptionId(): ?int
    {
        return $this->option_id;
    }

    public function setOptionId(?int $option_id): void
    {
        $this->option_id = $option_id;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(?int $category_id): void
    {
        $this->category_id = $category_id;
    }

    public function getStateId(): ?int
    {
        return $this->state_id;
    }

    public function setStateId(?int $state_id): void
    {
        $this->state_id = $state_id;
    }

    public function getPointId(): ?int
    {
        return $this->point_id;
    }

    public function setPointId(?int $point_id): void
    {
        $this->point_id = $point_id;
    }

    public function getDiscounts(): ?float
    {
        return $this->discounts;
    }

    public function setDiscounts(?float $discounts): void
    {
        $this->discounts = $discounts;
    }

    public function getAnother(): ?int
    {
        return $this->another;
    }

    public function setAnother(?int $another): void
    {
        $this->another = $another;
    }

    public function getChildrenCount(): ?int
    {
        return $this->children_count;
    }

    public function setChildrenCount(?int $children_count): void
    {
        $this->children_count = $children_count;
    }

    public function getSumAmountPayment(): ?int
    {
        return $this->sum_amount_payment;
    }

    public function setSumAmountPayment(?int $sum_amount_payment): void
    {
        $this->sum_amount_payment = $sum_amount_payment;
    }

    public function getIsGroup(): ?bool
    {
        return $this->is_group;
    }

    public function setIsGroup(?bool $is_group): void
    {
        $this->is_group = $is_group;
    }

    public function getChildrenId(): ?int
    {
        return $this->children_id;
    }

    public function setChildrenId(?int $children_id): void
    {
        $this->children_id = $children_id;
    }

    public function getServices(): ?bool
    {
        return $this->services;
    }

    public function setServices(?bool $services): void
    {
        $this->services = $services;
    }

    public function getIsOccupied(): ?bool
    {
        return $this->is_occupied;
    }

    public function setIsOccupied(?bool $is_occupied): void
    {
        $this->is_occupied = $is_occupied;
    }

    public function getCountFreeChildren(): ?int
    {
        return $this->count_free_children;
    }

    public function setCountFreeChildren(?int $count_free_children): void
    {
        $this->count_free_children = $count_free_children;
    }
}
