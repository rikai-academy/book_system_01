<?php

namespace App\Models;

use BookCategory;
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
        return $this->belongsTo(BookCategory::class,'category_id');
    }
}
