<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserMiddlewareTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testUserGoesToHome()
    {
        $this->browse(function ($first, $second) {

            $first->visit('/')
            ->waitForText('Login')
            ->type('email', value: 'f@f')
            ->type('password', value: 'password')
            ->click('#btnEnter')
            ->assertPathIs('/');

            $second->visit('/')
            ->waitForText('Login')
            ->type('email', value: 'a@a')
            ->type('password', value: 'password')
            ->click('#btnEnter')
            ->assertPathIs('/')
            ->visit('/users')
            ->assertPathIs('/home');
        });
    }
}
