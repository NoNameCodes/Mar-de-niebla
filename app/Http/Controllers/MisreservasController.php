<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Resource_;

class MisreservasController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reservas = Reserva::where('user_id', $user->id)->get();
        $resources = Resource::find($user->resource_id);
        dd($resources);
        
        return view('misreservas', compact('resources'));
    }
    
    
    

}

