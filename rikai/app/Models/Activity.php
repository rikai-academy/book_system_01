<?php

namespace App\Models;

use ActivityType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = "activity";

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function book() {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function type() {
        return $this->hasOne(ActivityType::class,'type_id');
    }
}
