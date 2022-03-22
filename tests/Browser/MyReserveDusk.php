<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MyReserveDusk extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_user_with_auth_allows_dashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
linea de prueba para hacer commit
        {
            $user = User::factory()->create();

            $response = $this->post('/login', [
                'email' => $user->email,
                'password' => 'password',
                'aproved_at' => now(),
            ]);

            $this->assertAuthenticated();
            $response = $this->view('dashboard');
    }
}
