<?php

namespace App\Models;

use App\Models\Book_Category;
use CartItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\FullTextSearch;
use Spatie\Tags\HasTags;

class Book extends Model
{
    use HasFactory,HasTags,FullTextSearch;
    protected $table = "book";
    public $timestamps = false;
    protected $fillable = [
        'author',
        'title',
        'image',
        'publish_at',
        'num_of_page',
        'quantity',
        'price',
    ];

    protected $searchable = [
        'title',
        'author'
    ];

    public function cartItems() {
        return $this->hasMany(CartItem::class,'book_id');
    }

    public function reviews() {
        return $this->hasMany(Review::class,'book_id');
    }

    public function bookCategory() {
        return $this->hasMany(Book_Category::class,'book_id');
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
    
    public function categorys(){
        return $this->belongsToMany(Category::class);
    }
}
