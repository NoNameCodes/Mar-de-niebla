<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserResource extends Component
{
    public function render()
    {
        $user_id = Auth::user()->id;
        $resources = DB::table('resources')->where('user_id', $user_id)->get();
        return view('livewire.user-resource', ['resources' => $resources]);
    }
}
