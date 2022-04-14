<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonAddReservation extends Component
{

    public $resource;

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    public function render()
    {
        return view('components.card');
    }
}
