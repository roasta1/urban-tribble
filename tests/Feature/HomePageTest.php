<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class HomePageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_home_page_status(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register_page_status(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_login_page_status(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_count(): void
    {
        User::factory()->create();
        $this->assertDatabaseCount('users', 12);
    }

    // public function test_users_logout(): void
    // {
    //     $user = User::factory()->create();
    //     $this->actingAs($user, 'web')
    //         ->get('/logout')
    //         ->assertRedirect('/');
    // }
}
