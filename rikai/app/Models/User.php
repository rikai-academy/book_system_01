<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

use App\Models\LikeComment;
use App\Models\LikeReview;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "users";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews() {
        return $this->hasMany(Review::class,'user_id');
    }

    public function likeReviews() {
        return $this->hasMany(LikeReview::class,'user_id');
    }

    public function likeComment() {
        return $this->hasMany(LikeComment::class,'user_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class,'user_id');
    }

    public function follow() {
        return $this->hasMany(Follow::class,'user_id');
    }

    public function beFollowed() {
        return $this->hasMany(Follow::class,'follow_id');
    }

    public function carts() {
        return $this->hasMany(Cart::class,'user_id');
    }

    public function activities() {
        return $this->hasMany(Activity::class,'user_id');
    }


    public function scopeUserId($query,$userid){
        return $query->where('id','=',$userid);
    }
    

    public function isLikeReviews(Review $review){
        return !! $this->likeReviews()->where('review_id', $review->id)->count();
    }

    public function isLikeComments(Comment $comment){
        return !! $this->likeComment()->where('comment_id', $comment->id)->count();
    }

    public function isFollowing(User $user){
        return !! $this->beFollowed()->where('user_id', $user->id)->count();
    }
}
