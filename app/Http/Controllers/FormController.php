<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;

class FormController extends Controller
{
    public function index(){
        $users = User::get();
        $location = Location::get();
        return view ('card-form-page', compact('users', 'location'));
    }
}
