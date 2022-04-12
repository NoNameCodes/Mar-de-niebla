<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class newResourceTest extends DuskTestCase
{

    /**
     * A Dusk test example.
     *
     * @return void
     */
    
     public function testFormName()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/')
                ->click('#btnAdd')
                // ->assertSee('Nombre del Recurso')
                ->type('text', 'Furgoneta Grande');
        });
    }

    public function testDropdown()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', value: 'm@m')
                ->type('password', value: 'password')
                ->click('#btnEnter')
                ->assertPathIs('/')
                ->click('#btnAdd')
                ->check('Mar de Niebla');
        });
    }

    public function testImageupload()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->type('email', value: 'm@m')
            ->type('password', value: 'password')
            ->click('#btnEnter')
            ->assertPathIs('/')
            ->click('#btnAdd')
            ->attach('photo', __DIR__.'1649759240_furgoneta-grande-del-transporte-aislada.jpg');
        });
    }

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
}
