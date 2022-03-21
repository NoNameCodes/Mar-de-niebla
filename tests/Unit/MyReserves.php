<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class MyReserves extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_without_auth_returns_login()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_user_with_auth_returns_home()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
            'aproved_at' => now(),
        ]);

        $this->assertAuthenticated();
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }

    public function test_user_with_auth_allows_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
            'aproved_at' => now(),
        ]);

        $this->assertAuthenticated();
        $response = $this->view('dashboard');
        $response->assertSee('Aañdir nuevo recurso');
    }
}
