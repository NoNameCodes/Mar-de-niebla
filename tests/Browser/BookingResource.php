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
                    ->waitForText('Login')
                    ->type('email', value: 'dani@dani.dani')
                    ->type('password', value: '12345678')
                    ->click('#btnEnter')
                    ->assertPathIs('/home')
                    ->click('#btnBooking')
                    ->assertSee('Seleccione el día')
                    ->type('date', value:'10122022')
                    ->type('text', value:'dani')
                    ->type('number', value:'678')
                    ->type('textarea', value:'678')
                    ->click('#btnReserve')
                    ->assertSee('Ha realizado correctamente la reserva');
        });
    }
}
