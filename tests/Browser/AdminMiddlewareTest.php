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
            ->waitForText('Iniciar sesión')
            ->type('email', value: 'admin@admin')
            ->type('password', value: 'password')
            ->click('#btnEnter')
            ->assertPathIs('/users');

            $second->visit('/')
            ->waitForText('Iniciar sesión')
            ->type('email', value: 'admin@admin')
            ->type('password', value: 'password')
            ->click('#btnEnter')
            ->assertPathIs('/users')
            ->visit('/home')
            ->assertPathIs('/users');
        });
    }
}
