<?php

namespace App\Models;

use BookCategory;
use CartItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "book";

    public function cartItem() {
        return $this->belongsTo(CartItem::class,'book_id');
    }

    public function reviews() {
        return $this->hasMany(Review::class,'book_id');
    }

    public function bookCategory() {
        return $this->hasMany(BookCategory::class,'book_id');
    }

    public function activities() {
        return $this->hasMany(Activity::class,'book_id');
    }

    public function activity() {
        return $this->hasMany(Activity::class,'book_id')->latest('id');
    }

    public function scopeBookActivityUser($query,$userid){
        return $query->rightJoin('activity','book.id','=','activity.book_id')
        ->where('user_id','=',$userid)->where('activity.type_id','=','5');
    }
}
