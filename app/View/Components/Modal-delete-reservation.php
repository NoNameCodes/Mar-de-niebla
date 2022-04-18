<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    public $reserva;

    public function __construct($reserva)
    {
        $this->reserva = $reserva;
    }

    public function render()
    {
        return view('components.modal-delete-reservation');
    }
}
