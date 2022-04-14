<?php

namespace App\View\Components;

use Illuminate\View\Component;

class locationEdit extends Component
{
    public $location;
    public $resource;

    public function __construct($location,$resource)
    {
        $this->location=$location;
        $this->resource=$resource;
    }

    public function render()
    {
        return view('components.location-edit');
    }
}
