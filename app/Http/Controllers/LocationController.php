<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocationController extends Controller
{
    public function index()
    {
        $location = Location::get();
        return view('card-form-page', compact('location'));
    }
    public function vista()
    {
        $location = Location::paginate(8);
        return view('location_view', compact('location'));
    }
    public function create()
    {
        return view('location_create');
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
        return view('locationedit', compact('location'));
    }
    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        $location->address = $request->input('address');
        $locationTotal = Location::all();
        foreach ($locationTotal as $locations) {
            if ($locations->address == $location->address) {
                $message = 'La dirección ' . $locations->address . ' ya estaba añadida,añada una dirección nueva si lo desea';
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
