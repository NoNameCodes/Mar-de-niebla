<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonDeleteReservation extends Component
{

    public $reserva;
   
    
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($reserva)
    {
        $this->reserva=$reserva;
        
        
    }

       /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       
        return view('components.button-delete-reservation');
    }
}
