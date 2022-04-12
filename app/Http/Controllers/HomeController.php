<?php

namespace App\Http\Controllers;

use App\Models\Reserva;

class HomeController extends Controller
{
    public function index()

    {
        return view('welcome');
    }

    public function approval()
    {
        return view('user-approval');
    }
}
