<?php

namespace App\Http\Controllers;

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
