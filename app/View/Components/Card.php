<?php

namespace App\View\Components;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Card extends Component
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
        $user_id = Auth::user();
        $reservas = Reserva::where('user_id', $user_id->id)->get();
        return view('components.card', compact('reservas'));
    }
}
