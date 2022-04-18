<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminViews extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_admin_views()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->waitForText('Login')
            ->type('email', value: 'admin@admin')
            ->type('password', value: 'password')
            ->click('#btnEnter')
            ->assertPathIs('/')
            ->click('#btnManage')
            ->assertPathIs('organizations')
            ->assertSee('Gestionar organizacionessss');
        });
    }
}