<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BookingResource extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_booking_resource()
    {
        $this->browse(function (Browser $browser)  {
            $browser->visit('/')
                    ->waitForText('Iniciar sesión')
                    ->type('email', value: 'f@f')
                    ->type('password', value: 'password')
                    ->click('#btnEnter')
                    ->assertPathIs('/home')
                    ->click('#btnBooking')
                    ->assertSee('Seleccione el día')
                    ->type('date', value:'10102023')
                    ->type('text', value:'dani')
                    ->type('number', value:'678')
                    ->type('textarea', value:'678')
                    ->click('#btnReserve')
                    ->assertSee('Ha realizado correctamente la reserva');
        });
    }
}
