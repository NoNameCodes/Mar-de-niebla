<?php

namespace App\Http\Controllers;

use App\Models\Reserva;

use Illuminate\Support\Facades\Auth;

class MisreservasController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $resources = Reserva::where('user_id', $user->id)->get();
        $resources = $resources->resource;
        return view('misreservas', compact('resources'));
    }
    

    

    
       
}

