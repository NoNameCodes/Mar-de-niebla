<?php

namespace App\View\Components\resource;

use Illuminate\View\Component;

class card extends Component
{
    public $resource;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.resource.card');
    }
}
