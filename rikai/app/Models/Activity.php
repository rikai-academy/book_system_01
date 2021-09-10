<?php

namespace App\Models;

use App\Models\ActivityType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = "activity";

    protected $fillable = [
        'book_id',
        'user_id',
        'type_id',
    ];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function book() {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function type() {
        return $this->belongsTo(ActivityType::class,'type_id');
    }

    public function scopeActivityOfBooksUser($query){
        return $query->join('users','activity.user_id','=','users.id')
        ->join('book','activity.book_id','=','book.id');
    }
}
