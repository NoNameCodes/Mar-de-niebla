<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class reserve extends Component
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
        return view('components.buttons.reserve');
    }
}
