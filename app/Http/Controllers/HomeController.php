<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()

    {
        return view('test');
    }

    public function approval()
    {
        return view('user.pending');
    }
}
