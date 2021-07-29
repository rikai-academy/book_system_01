<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function cart() {
        return $this->belongsTo(Cart::class,'cart_id');
    }

    public function book() {
        return $this->hasOne(Book::class,'book_id');
    }

}
