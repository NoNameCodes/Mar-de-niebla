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
            $browser->visit('/home')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/home')
                ->click('#btnAdd')
                ->assertSee('Guardar')
                ->pressAndWaitFor('Guardar');
        });
    }
   
    public function testFormClose()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/home')
                ->click('#btnAdd')
                ->assertSee('Cancelar')
                ->assertPathIs('/resources/create');
        });
    }

    public function testFormDescription()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/home')
                ->click('#btnAdd')
                ->type('textarea', value:'Está aparcada en la Calle Brasil');
        });
    }
}
