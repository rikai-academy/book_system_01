<?php

namespace Tests\Unit\Model;

use Tests\TestCase;
use App\Models\User;
use App\Models\Review;
use App\Models\LikeReview;
use App\Models\LikeComment;
use App\Models\Comment;
use App\Models\Follow;
use App\Models\Cart;
use App\Models\Activity;
use App\Models\Role;
use Carbon\Carbon;
use App\Models\Group;
use Illuminate\Support\Facades\Schema;

class UserModelTest extends TestCase
{
    public function setUp() :void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->review = Review::create([
            'book_id' => '3',
            'user_id' => $this->user->id,
            'title' => 'sach hay lam do nha',
            'body' => 'sach hay lam do nha 1000000',
            'rate' => 10,
        ]);
        $this->comment = Comment::create([
            'user_id' => $this->user->id,
            'review_id' => $this->review->id,
            'body' => 'sach hay lam do nha 1000000 1000000',
        ]);
        
    } 

    /** @test */
    public function users_database_has_expected_columns()
    { 
        $this->assertTrue( 
          Schema::hasColumns('users', [
            'id','name', 'email', 'password','image','role',
            'created_at','email_verified_at','updated_at','remember_token',
        ]), 1);
    }

    /** @test */
    public function a_user_has_many_review()
    { 
        $review = Review::create([
            'book_id' => '3',
            'user_id' => $this->user->id,
            'title' => 'sach hay lam do nha',
            'body' => 'sach hay lam do nha 1000000',
            'rate' => 10,
        ]);
        $this->assertTrue($this->user->reviews->contains($review));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->reviews);
    }

    /** @test */
    public function a_user_has_many_comment()
    { 
        $comment = Comment::create([
            'user_id' => $this->user->id,
            'review_id' => $this->review->id,
            'body' => 'sach hay lam do nha 1000000 1000000',
        ]);
        $this->assertTrue($this->user->comments->contains($comment));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->comments);
    }

    /** @test */
    public function a_user_has_many_like_review()
    { 
        $likereview = LikeReview::create([
            'user_id' => $this->user->id,
            'review_id' => $this->review->id,
            'like' => 1,
        ]);
        $this->assertTrue($this->user->likeReviews->contains($likereview));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->likeReviews);
    }

    /** @test */
    public function a_user_has_many_like_comment()
    { 
        $likecomment = LikeComment::create([
            'user_id' => $this->user->id,
            'comment_id' => $this->comment->id,
            'like' => 1,
        ]);
        $this->assertTrue($this->user->likeComment->contains($likecomment));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->likeComment);
    }

    /** @test */
    public function a_user_has_many_follow()
    { 
        $follow = Follow::create([
            'user_id' => $this->user->id,
            'follow_id' => 1,
        ]);
        $this->assertTrue($this->user->follow->contains($follow));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->follow);
    }

    /** @test */
    public function a_user_has_many_be_followed()
    { 
        $follow = Follow::create([
            'user_id' => 1,
            'follow_id' => $this->user->id,
        ]);
        $this->assertTrue($this->user->beFollowed->contains($follow));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->beFollowed);
    }

    /** @test */
    public function a_user_has_many_carts()
    { 
        $cart = Cart::create([
            'user_id' => $this->user->id,
            'total_price' => 100,
            'status'=>'pending',
            'first_name'=>'A',
            'last_name'=>'B',
            'name_of_card'=>'AAAA',
            'credit_card_number'=>'123123123',
        ]);
        $this->assertTrue($this->user->carts->contains($cart));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->carts);
    }

    /** @test */
    public function a_user_has_many_activitys()
    { 
        $activity = Activity::create([
            'user_id' => $this->user->id,
            'book_id' => 3,
            'type_id'=> 1,
        ]);
        $this->assertTrue($this->user->activities->contains($activity));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->activities);
    }
}
