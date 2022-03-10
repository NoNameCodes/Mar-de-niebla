<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $resources = Resource::orderBy('id', 'desc')->paginate(5);
        return view('welcome', compact('resources'));
    
           }    

    
}    
