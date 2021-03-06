<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservaController extends Controller
{
    public function index()
    {
        $resources = Resource::orderBy('id', 'desc');
        return view('reserva', compact('resources'));
    }

    public function create($id)
    {
        $resource = Resource::find($id);
        return view('_reserves.create', ['resource' => $resource]);
    }

    public function store(Request $request, $id)
    {
        $reservasTotales = Reserva::all();
        $resource = Resource::find($id);
        $user = Auth::user()->id;
        $reserva = new Reserva();
        $reserva->name = $request->input('name');
        $reserva->date = $request->input('date');
        $reserva->coments = $request->input('coments');
        $reserva->phone = $request->input('phone');
        $reserva->resource_id = $id;
        $reserva->user_id = $user;
        foreach ($reservasTotales as $variable) {
            if (($variable->date == $reserva->date) & ($variable->resource_id == $reserva->resource_id)) {
                $message = "La reserva del recurso " . $resource->name . " para el: " . Carbon::parse($reserva->date)->locale('es_ES')->isoFormat('dddd, D MMMM YYYY') . " está ocupada. Por favor, elija otra fecha.";
                Session::flash('message', $message);
                return back();
            }
        }
        $reserva->save();
        $message = "Ha realizado correctamente la reserva del recurso " . $resource->name . " para el: " . Carbon::parse($reserva->date)->locale('es_ES')->isoFormat('dddd, D MMMM YYYY') . ".";
        Session::flash('message', $message);
        return redirect()->route('home');
    }

    public function show($id)
    {

        $resource = Resource::find($id);
        return view('reserva', compact('resource'));
    }

    public function remove($id)
    {
        $reserva = Reserva::find($id);
        return view('misreservas', compact('reserva'));
    }

    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        $message = 'La reserva de ' . $reserva->name . ' para la fecha: ' . Carbon::parse($reserva->date)->locale('es_ES')->isoFormat('dddd, D MMMM YYYY') . ' ha sido anulada';
        Session::flash('message', $message);
        return redirect()->route('misreservas');
    }
}
