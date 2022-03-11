<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    
    {
        
        
        //return view('welcome', compact('resources'));
    
        return view('welcome');
    }    

    
    public function approval()
    {
        return view('user-approval');
    }
}
