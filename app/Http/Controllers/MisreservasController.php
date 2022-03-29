<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;


class MisreservasController extends Controller
{
    public function index()
    {
        $user_id = Auth::user();
        $reservas = Reserva::where('user_id', $user_id->id)->get();
       $reservasId = Reserva::where('user_id', $user_id->id)->get('reservas.resource_id')->toArray();
        //dd($reservas);
        $resources =  [];
            foreach ($reservasId as $reserva) {
                    $resource = Resource::where('id', '=', $reserva)->first();                   
                    array_push($resources, $resource);
            }  
        return view('misreservas', compact('resources', 'reservas'));
    }

    
}
