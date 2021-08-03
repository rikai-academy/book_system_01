<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Category extends Model
{
    use HasFactory;
    protected $table = "book_category";

    public function books() {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function category() {
        return $this->hasMany(Category::class,'category_id');
    }

}
