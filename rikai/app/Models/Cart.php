<?php

namespace App\Models;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";

    protected $fillable = [
        'user_id',
        'total_price',
        'first_name',
        'last_name',
        'name_of_card',
        'credit_card_number',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function cartItems() {
        return $this->hasMany(CartItem::class,'cart_id');
    }
}
