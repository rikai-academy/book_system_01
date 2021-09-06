<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Cviebrock\EloquentTaggable\Taggable;

class Tag extends Model
{
    use HasFactory,SearchableTrait;
    protected $table = "taggable_tags";
    use Taggable;
    protected $fillable = [
        'tag_id',
        'name',
        'normalized',
        'created_at',
        'updated_at',
    ];

    protected $searchable = [
        'columns' => [
            'book.title' => 10,
            'book.author' => 10,
        ]
    ];

    public function tagbooks(){
        return $this->hasMany(TagBook::class,'tag_id');
    }

    public function scopeHotTag($query){
        return $query->join('taggable_taggables','taggable_taggables.tag_id','=','taggable_tags.tag_id')
        ->groupBy('taggable_tags.tag_id')
        ->orderBy(\DB::raw('count(taggable_taggables.tag_id)'), 'DESC')
        ->select('taggable_taggables.tag_id','taggable_tags.name');
    }
}
