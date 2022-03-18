<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index(){
        $location = Location::get();
        return view ('card-form-page', compact('locations'));
    }
} 

