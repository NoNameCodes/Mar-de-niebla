<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;

class PageController extends Controller
{
    public function resource(Resource $resource)
    {
        $reservas = Reserva::all();
        dd($reservas);
        return view ('resource', compact('resource', 'reservas'));
    }
}
