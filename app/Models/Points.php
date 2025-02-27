<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int         $id
 * @property int         $rent_in_hand_id
 * @property string|null $title
 * @property string|null $email
 * @property string|null $website
 * @property string|null $phone
 * @property string|null $place_text
 * @property Inventory   $inventory
 */
class Points extends Model
{
    use HasFactory;

    protected $table = 'points';
    protected $fillable
        = [
            'rent_in_hand_id',
            'title',
            'email',
            'website',
            'phone',
            'place_text',
        ];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'point_id');
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPlaceText(): ?string
    {
        return $this->place_text;
    }

    public function setPlaceText(?string $place_text): void
    {
        $this->place_text = $place_text;
    }
}
