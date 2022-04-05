<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $location = Location::get();
        return view ('card-form-page', compact('location'));
    }
    public function vista(){
        $location = Location::get();
        return view('location_view',compact('location'));
    }
    public function create(){
        return view('location_create');
    }
    public function store(Request $request){
        $location= new Location(); 
        $location->address = $request->input('address');
        $location->save();
        return  redirect ('/locations');
    }
    public function edit($id){
        $location=Location::find($id);
        return view('locationedit', compact('location'));

    }
    public function update(Request $request,$id){
        $location = Location::find($id);
        $location->address = $request->input('address');
        $location->save();
        return  redirect ('/locations');
    }
    public function destroy($id){
        $location=Location::find($id);
        $location->delete();
        return redirect('/locations');
    }
}

