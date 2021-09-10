<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Spatie\Tags\Tag;
use Tests\TestCase;

class BookViewTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $super_admin = Role::create(['name' => 'Super Admin']);
        $this->user->assignRole($super_admin);
    }

    /** @test */
    public function create_book_view_can_render()
    {
        $categorys = Category::all();
        $tags = Tag::all();
        $this->actingAs($this->user);
        $view = $this->withViewErrors([])->view('admin.book.add',compact('categorys','tags'));
        $view->assertSee(__('message.Books'));
        $view->assertSee(__('message.Title'));
        $view->assertSee(__('message.Author'));
        $view->assertSee(__('message.publish_at'));
        $view->assertSee(__('message.Name_Category'));
        $view->assertSee(__('message.Tag'));
        $view->assertSee(__('message.Image'));
    }
}
