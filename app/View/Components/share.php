<?php

namespace App\View\Components;

use Illuminate\View\Component;

class share extends Component
{
    public $users;
    public $reserva;
    public function __construct($users)
    {
        $this->users = $users;
    }

    public function render()
    {
        return view('components.share');
    }
}
