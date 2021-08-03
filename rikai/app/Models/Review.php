<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LikeReview;

class Review extends Model
{
    use HasFactory;
    protected $table = "review";

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class,'review_id');
    }

    public function likeReviews() {
        return $this->hasMany(LikeReview::class,'review_id');
    }
}
