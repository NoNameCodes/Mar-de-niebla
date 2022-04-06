<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function resource(Resource $resource)
        {
            $user_id = Auth::user();
            $id = $resource->id;
            $reservations = Reserva::where('resource_id', $id)->get();
           
            return view ('history', compact('resource', 'reservations'));
        }
}
