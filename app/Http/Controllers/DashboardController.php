<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $resources = Resource::where('user_id', $user_id)->paginate(5);
        $reservas = Reserva::all();
        return view('dashboard', compact('resources', 'reservas'));

    }
}
