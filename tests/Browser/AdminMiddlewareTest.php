<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminMiddlewareTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */    public function testAdminGoesToUsers()
    {
        $this->browse(function ($first, $second) {
            $first->visit('/')
            ->waitForText('Login')
            ->type('email', value: 'q@q')
            ->type('password', value: '1234567890')
            ->click('#btnEnter')
            ->assertPathIs('/users');

            $second->visit('/')
            ->waitForText('Login')
            ->type('email', value: 'q@q')
            ->type('password', value: '1234567890')
            ->click('#btnEnter')
            ->assertPathIs('/users')
            ->visit('/home')
            ->assertPathIs('/users');
        });
    }
}
