<?php

namespace App\Http\Controllers;

use App\Models\Resource;

class DashboardController extends Controller
{
    public function index()
    {
        $resources = Resource::orderBy('id', 'desc')->paginate(5);
        return view('dashboard', compact('resources'));
    }
}
