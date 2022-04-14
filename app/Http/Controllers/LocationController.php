<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocationController extends Controller
{
    public function index()
    {
        $location = Location::paginate(5);
        return view('_admin.locations.index', compact('location'));
    }
    public function create()
    {
        return view('_admin.locations.create');
    }
    public function store(Request $request)
    {
        $location = new Location();
        $location->address = $request->input('address');
        $locationTotal = Location::all();
        foreach ($locationTotal as $locations) {
            if ($locations->address == $location->address) {
                $message = 'La dirección ' . $locations->address . ' ya estaba añadida,añada una dirección nueva si lo desea';
                Session::flash('message', $message);
                return  redirect('/location');
            }
        }
        $message = 'La dirección ' . $location->address . ' ha sido añadida correctamente';
        Session::flash('message', $message);
        $location->save();
        return  redirect('/locations');
    }
    public function edit($id)
    {
        $location = Location::find($id);
        return view('_admin.locations.edit', compact('location'));
    }
    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        $location->address = $request->input('address');
        $locationTotal = Location::all();
        foreach ($locationTotal as $locations) {
            if ($locations->address == $location->address) {
                $message = 'La dirección ' . $locations->address . ' ya estaba añadida, añada una dirección nueva si lo desea';
                Session::flash('message', $message);
                return redirect('/locations');
            }
        }
        $message = 'La dirección ' . $location->address . ' ha sido editada correctamente';
        Session::flash('message', $message);
        $location->save();
        return  redirect('/locations');
    }
    public function destroy($id)
    {
        $location = Location::find($id);
        $message = 'La dirección ' . $location->address . ' ha sido eliminada correctamente';
        Session::flash('message', $message);
        $location->delete();
        return redirect('/locations');
    }
}
