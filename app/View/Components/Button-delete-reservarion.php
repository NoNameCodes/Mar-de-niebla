<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonDeleteReservation extends Component
{

    public $reserva;

    public function __construct($reserva)
    {
        $this->reserva = $reserva;
    }

    public function render()
    {
        return view('components.button-delete-reservation');
    }
}
