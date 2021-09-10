<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Str;

class LoginControllerTest extends TestCase
{
    private $controller;
    private $user;

    public function setUp(): void{
        parent::setUp();

        $this->controller = new LoginController;
        $this->user = User::factory()->create([
            'role' => 'admin',
            'password'=>bcrypt('123123123'),
        ]);
    }

    /** @test */
    public function a_guest_can_see_admin_login_page()
    { 
        $response = $this->get('/admin/login')->assertOk();
    }

    /** @test */
    public function test_user_can_login_admin_page_with_correct_credentials()
    {
        $response = $this->post('admin/login', [
            'email' => $this->user->email,
            'password' => '123123123',
        ]);
        $this->assertAuthenticatedAs($this->user);
        $response->assertRedirect('admin/homeadmin');
    }

    /** @test */
    public function test_user_can_login_user_page_with_correct_credentials()
    {
        $response = $this->post('login', [
            'email' => $this->user->email,
            'password' => '123123123',
        ]);
        $this->assertAuthenticatedAs($this->user);
        $response->assertRedirect('/');
    }

    /** @test */
    public function test_user_can_not_login_admin_page_with_correct_credentials()
    {
        $response = $this->post('admin/login', [
            'email' => $this->user->email,
            'password' => 'invalid-password',
        ]);
        $this->assertNotEquals('invalid-password',$this->user->password);
        $response->assertRedirect('/admin/login');
    }

    /** @test */
    public function test_user_can_not_login_user_page_with_correct_credentials()
    {
        $response = $this->post('login', [
            'email' => $this->user->email,
            'password' => 'invalid-password',
        ]);
        $this->assertNotEquals('invalid-password',$this->user->password);
        $response->assertRedirect('/');
    }

    /** @test */
    public function test_only_authenticated_user_can_logout_admin_page()
    {
        $response = $this->get('/admin/logout');
        $response->assertRedirect('/admin/login');
    }

    /** @test */
    public function test_only_authenticated_user_can_logout_user_page()
    {
        $response = $this->post('/logout');
        $response->assertRedirect('/');
    }

}
