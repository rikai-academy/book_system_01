<?php

namespace App\Models;

use App\Models\Book_Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    public $timestamps = false;
    protected $fillable = [
        'description',
        'title',
    ];

    public function bookCategory() {
        return $this->hasMany(Book_Category::class,'category_id');
    }

    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
