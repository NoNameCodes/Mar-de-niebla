<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;

use Illuminate\Support\Facades\Auth;

class MisreservasController extends Controller
{
    public function index()
    {
        $actualDate = date('Y-m-d');
        $user_id = Auth::user();
        $reservasFuture = Reserva::where('user_id', $user_id->id)->where('date', '>=' , $actualDate)->get();
             
        $reservasId = Reserva::where('user_id', $user_id->id)->get('reservas.resource_id')->unique('resource_id')->values()->all();
        $resources =  [];         
            foreach ($reservasId as $reserva) {
               $resource = Resource::where('id', '=', $reserva->resource_id)->first(); 
               array_push($resources, $resource);
        }   
        
        return view('misreservas', compact('resources', 'reservasFuture'));
    }
        
}



    
    
    
   