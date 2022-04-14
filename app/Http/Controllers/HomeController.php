<?php

namespace App\Http\Controllers;

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
