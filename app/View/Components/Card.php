<?php

namespace App\View\Components;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Card extends Component
{

    public $resource;
    public $reservasFuture;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($resource, $reservasFuture='')
    {
        $this->resource=$resource;
        $this->reservasFuture=$reservasFuture;
        
    }

       /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       
        $reservas = Reserva::all();
        return view('components.card');
    }
}
