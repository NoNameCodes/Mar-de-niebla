<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShareController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('_resources.create', compact('users'));
    }
}
