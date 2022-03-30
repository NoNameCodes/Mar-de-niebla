<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
       
    public function index(){
        $user_id = Auth::user();

        $reservations = Reserva::where('user_id', $user_id->id)->get();
        
        
        return view('history', compact('reservations'));
    }

    public function show($id)
    {
        $resource = Resource::find($id);
       
        return view('history', compact('resource'));
    } 
}
