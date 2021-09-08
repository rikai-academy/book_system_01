<?php

namespace Tests\Feature\Views;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_login_page_can_be_showed()
    { 
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('Skydash Admin');
        $response->assertSee('Đăng nhập');
    }

    public function test_a_login_page_can_not_be_showed()
    { 
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertDontSee('Đăng ký');
    }
}
