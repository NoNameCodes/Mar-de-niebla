<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class cardFormPage extends Component
{
    public function render()
    {
        $users = User::all();
        return view('card-form-page', ['users' => $users]);
    }
}
