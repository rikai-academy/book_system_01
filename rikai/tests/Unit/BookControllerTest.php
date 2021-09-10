<?php

namespace Tests\Unit;

use App\Http\Controllers\Admin\BookController;
use App\Http\Requests\BookRequest;
use App\Library\Services\UploadimageService;
use App\Models\Book;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class BookControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->book = Book::factory()->create();
        $this->user = User::factory()->create();
        $super_admin = Role::create(['name' => 'Super Admin']);
        $this->user->assignRole($super_admin);
        $service = new UploadimageService;
        $this->controller = new BookController($service);
    }

    /** @test */
    public function user_can_see_book_created_page()
    {
        $this->actingAs($this->user);
        $this->assertEquals('admin.book.add', $this->controller->create()->name());
    }

    /** @test */
    public function user_create_book_with_valid_data()
    {
        $this->actingAs($this->user);
        $created_rules = [
            'title' => 'required',
            'author' => 'required',
            'publish_at' => 'required',
            'num_of_page' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ];
        $valid_data = [
            'title' => 'book for testing',
            'author' => 'PPB',
            'publish_at' => now(),
            'num_of_page' => '100',
            'quantity' => 10,
            'price' => 12
        ];
        $validate = Validator::make($valid_data, $created_rules);
        $this->assertFalse($validate->fails());
    }

    /** @test */
    public function user_create_book_with_invalid_data()
    {
        $this->actingAs($this->user);
        $created_rules = [
            'title' => 'required|unique:book',
            'author' => 'required',
            'publish_at' => 'required',
            'num_of_page' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ];
        $valid_data = [
            'title' => 'book for testing',
            'author' => '',
            'publish_at' => '',
            'num_of_page' => '',
            'quantity' => '',
            'price' => ''
        ];
        $validate = Validator::make($valid_data, $created_rules);
        $this->assertTrue($validate->fails());
    }
}
