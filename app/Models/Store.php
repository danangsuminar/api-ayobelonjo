<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use UUID;

    protected $fillable = [
        'user_id',
        'name',
        'logo',
        'about',
        'phone',
        'address_id',
        'city',
        'address',
        'postal_code',
        'is_verified'
    ];

    // Relationship: ONE STORE owned by ONE USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: ONE STORE only has ONE Store Balance
    public function storeBalance()
    {
        return $this->hasOne(StoreBalance::class);
    }

    // Relationship: ONE WALLET has MANY HISTORIES
    public function storeBalanceHistories()
    {
        return $this->hasMany(StoreBalanceHistory::class);
    }
}
