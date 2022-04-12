<?php

namespace App\Http\Controllers;

use App\Models\Reserva;

class HomeController extends Controller
{
    public function index()

    {
        $reservas = Reserva::all();
        return view('welcome', compact('reservas'));
    }

    public function approval()
    {
        return view('user-approval');
    }
}
