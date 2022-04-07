<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Login')
                ->assertSee('Recordarme')
                ->assertSee('¿Olvidaste tu contraseña?')
                ->assertSee('¿No tienes cuenta?');
        });
    }

    public function test_user_with_auth_allows_dashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(3));
            $browser->visit('/dashboard')
                ->assertSee('Añadir nuevo recurso');
        });
    }
}
