<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserResource extends Component
{
    public function render()
    {
        $user_id = Auth::user()->id;
        $resources = DB::table('resources')->where('user_id', $user_id)->get();
        return view('livewire.user-resource', ['resources' => $resources]);
    }
}
