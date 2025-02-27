<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int         $id
 * @property int         $rent_in_hand_id
 * @property string|null $title
 * @property string|null $const
 * @property bool|null   $is_system_status
 * @property string|null $color
 * @property string|null $text_color
 * @property Inventory   $inventory
 */
class States extends Model
{
    use HasFactory;

    protected $table = 'states';

    protected $fillable = [
        'rent_in_hand_id',
        'title',
        'const',
        'is_system_status',
        'color',
        'text_color',
    ];

    protected $casts = [
        'is_system_status' => 'boolean',
    ];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'state_id');
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getConst(): ?string
    {
        return $this->const;
    }

    public function setConst(?string $const): void
    {
        $this->const = $const;
    }

    public function getIsSystemStatus(): ?bool
    {
        return $this->is_system_status;
    }

    public function setIsSystemStatus(?bool $is_system_status): void
    {
        $this->is_system_status = $is_system_status;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    public function getTextColor(): ?string
    {
        return $this->text_color;
    }

    public function setTextColor(?string $text_color): void
    {
        $this->text_color = $text_color;
    }
}
