<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RemoveReserveTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_confirm_view_when_cancelling_a_reserve()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            // ->assertPathIs('/login')
            // ->type('email', value: 'p@p')
            // ->type('password', value: '1234567890')
            // ->click('#btnEnter')
            // ->assertSee('Añadir recurso')
            // ->assertPathIs('/home');
        });
    }
}
