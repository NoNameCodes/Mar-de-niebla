<?php

namespace App\Http\Livewire;

use App\Models\Resource;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserResource extends Component
{
    public function render($id)
    {
        $userResource = Auth::user()->id;
        return view('livewire.user-resource', ['userResource' => $userResource, 'id' => $id]);
    }
}
