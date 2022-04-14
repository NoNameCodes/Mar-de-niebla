<?php

namespace App\View\Components;

use Illuminate\View\Component;

class locationList extends Component
{
    public $location;

    public function __construct($location)
    {
        $this->location=$location;
    }

    public function render()
    {
        return view('components.location-list');
    }
}
