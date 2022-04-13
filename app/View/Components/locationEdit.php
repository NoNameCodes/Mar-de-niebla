<?php

namespace App\View\Components;

use Illuminate\View\Component;

class locationEdit extends Component
{
    public $location;
    public $resource;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($location,$resource)
    {
        $this->location=$location; 
        $this->resource=$resource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.location-edit');
    }
}
