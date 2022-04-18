<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ApproveUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_user_approved()
    {
        $this->browse(function ($first, $second) {
            $first->visit('/')
                
                ->type('email', value: 'prueba@prueba.com')
                ->type('password', value: 'pruebaprueba')
                ->click('#btnEnter')
                ->pause(5000);

            $second->visit('/')
                
                ->type('email', value: 'admin@admin')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->visit('/aprove/users')
                ->click('#btnAceptar')
                ->assertSee('User approved successfully');

           
        });
    }
}
