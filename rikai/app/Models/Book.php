<?php

namespace App\Models;

use BookCategory;
use CartItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function cartItem() {
        return $this->belongsTo(CartItem::class,'book_id');
    }

    public function reviews() {
        return $this->hasMany(Review::class,'book_id');
    }

    public function bookCategory() {
        return $this->hasMany(BookCategory::class,'book_id');
    }

}
