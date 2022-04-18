<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class newResourceTest extends DuskTestCase
{  
    public function testFormSave()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/')
                ->click('#btnAdd')
                ->assertSee('Guardar')
                ->pressAndWaitFor('Guardar');
        });
    }
   
    public function testFormClose()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/')
                ->click('#btnAdd')
                ->assertSee('Cerrar')
                ->assertPathIs('/form');
        });
    }

    public function testFormDescription()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/')
                ->click('#btnAdd')
                ->type('textarea', value:'Está aparcada en la Calle Brasil');
        });
    }
}
