<?php

namespace App\View\Components;

use App\Models\Reserva;
use Illuminate\View\Component;

class Card extends Component
{

    public $resource;
    public $reservasFuture;

    public function __construct($resource, $reservasFuture='')
    {
        $this->resource=$resource;
        $this->reservasFuture=$reservasFuture;
    }

    public function render()
    {
        $reservas = Reserva::all();
        return view('components.card');
    }
}
