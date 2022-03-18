<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ResourceShow extends Component
{
    public $resource;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($resource)
    {
        $this->resource=$resource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.resource-show');
    }
}