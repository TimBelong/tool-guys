<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHasPurchaseItems extends Model
{
    protected $table = 'user_has_purchase_items';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'inventory_id',
        'product_id',
        'type',
        'rental_days',
        'start_date',
        'end_date',
        'quantity'
    ];


    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'rental_days' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}