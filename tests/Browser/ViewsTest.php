<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewsTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function test_visit_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Login')
                    ->assertSee('Recordarme');
        });
    }

    public function test_visit_crud()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/resources')
                    ->assertSee('CRUD')
                    ->assertSee('omar');
        });
    }

    public function test_visit_register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Registro');
                    
        });
    }

    public function test_visit_create_resource()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/resources/create')
                    ->assertSee('Recurso');
                    
        });
    }

    public function test_visit_edit_resource()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/resources/1/edit')
                    ->assertSee('Edit');
                    
        });
    }
}


