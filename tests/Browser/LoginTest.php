<?php

namespace Tests\Browser;
use App\Models\User;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_user_login()
    {

     

        $this->browse(function (Browser $browser)  {
            $browser->visit('/login')
                    ->waitForText('Login')
                    ->type('email', value: 'dani@dani.dani')
                    ->type('password', value: '12345678')
                    ->click('#btnEnter')
                    ->assertPathIs('/home');
        });
    }
}
