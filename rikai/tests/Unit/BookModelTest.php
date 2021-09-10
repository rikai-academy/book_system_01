<?php

namespace Tests\Unit;

use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\Book;
use App\Models\Book_Category;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Review;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;

class BookModelTest extends TestCase
{

    use RefreshDatabase;

    public function setUp() :void
    {
        parent::setUp();
        $this->book = Book::factory()->create();
        $this->user = User::factory()->create();
    }

    /** @test */
    public function books_database_has_expected_columns()
    { 
        $this->assertTrue( 
          Schema::hasColumns('book', [
            'id','title', 'author', 'image','publish_at','num_of_page',
            'rate','quantity','status','price'
        ]), 1);
    }

    /** @test */
    public function a_book_has_many_reviews() {
        $review = Review::create([
            'book_id' => $this->book->id,
            'user_id' => $this->user->id,
            'title' => 'this is a good read',
            'body' => 'a very good read indead',
            'rate' => 10,
        ]);
        $this->assertTrue($this->book->reviews->contains($review));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',$this->book->reviews);
    }

    /** @test */
    public function a_book_has_many_categories() {
        $category = Category::create([
            'title' => 'testing category',
            'parent_id' => 0,
            'description' => 'a category created for testing'
        ]);
        $book_category = Book_Category::create([
            'book_id' => $this->book->id,
            'category_id' => $category->id,
        ]);
        $this->assertTrue($this->book->bookCategory->contains($book_category));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',$this->book->bookCategory);
    }

    /** @test */
    public function a_book_has_many_activities() {
        $activity_type = ActivityType::create([
            'type' => 'type for testing'
        ]);
        $activity = Activity::create([
            'book_id' => $this->book->id,
            'user_id' => $this->user->id,
            'type_id' => $activity_type->id,
            'read_status' => 0,
            'favorite_status' => 0
        ]);
        $this->assertTrue($this->book->activities->contains($activity));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',$this->book->activities);
    }

    /** @test */
    public function a_book_belong_to_categories() {
        $category = Category::create([
            'title' => 'testing category',
            'parent_id' => 0,
            'description' => 'a category created for testing'
        ]);
        $book_category = Book_Category::create([
            'book_id' => $this->book->id,
            'category_id' => $category->id,
        ]);
        $this->assertTrue($category->books->contains($this->book));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',$category->books);
    }
}
