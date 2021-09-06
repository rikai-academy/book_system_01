<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Cviebrock\EloquentTaggable\Taggable;

class TagBook extends Model
{
    use HasFactory,SearchableTrait;
    protected $table = "taggable_taggables";
    use Taggable;
    protected $fillable = [
        'tag_id',
        'taggable_id',
        'taggable_type',
        'created_at',
        'updated_at',
    ];

    protected $searchable = [
        'columns' => [
            'book.title' => 10,
            'book.author' => 10,
        ]
    ];

    
    public function tag() {
        return $this->belongsToMany(Tag::class);
    }

    public function book() {
        return $this->belongsToMany(Book::class);
    }
}
