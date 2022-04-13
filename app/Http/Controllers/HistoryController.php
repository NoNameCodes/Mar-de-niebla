<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function resource(Resource $resource)
    {
        $actualDate =  date('Y-m-d');
        $user_id = Auth::user();
        $id = $resource->id;
        $reservations = Reserva::where('resource_id', $id)->where('date', '<', $actualDate)->get();

        return view('_resources.history', compact('resource', 'reservations'));
    }
}
