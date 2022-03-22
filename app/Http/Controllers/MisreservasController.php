<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;

class MisreservasController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $resources = Reserva::where('user_id', $user_id)->paginate(5); 
        return view('misreservas', compact('resources'));
    }

    
}
