<?php

namespace App\Http\Controllers;

use App\Models\Reserva;

class HomeController extends Controller
{
    public function index()

    {
        return view('_user.home');
    }

    public function approval()
    {
        return view('_user.pending');
    }
}
