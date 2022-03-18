<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resource::orderBy('id', 'desc');
        return view('reserva', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $resource=Resource::find($id);
        return view('reserva', ['resource'=>$resource]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

            $resource=Resource::find($id);
            $user=Auth::user()->id;
            $reserva=new Reserva();
            $reserva->name=$request->input('name');
            $reserva->date=$request->input('date');
            $reserva->coments=$request->input('coments');
            $reserva->phone=$request->input('phone');
            $reserva->location_id=$resource->location_id;
            $reserva->resource_id=$id;
            $reserva->user_id=$user;
            $reserva->save();
            $message="Ha realizado correctamente la reserva del recurso ".$resource->name." para el día: ".strval($reserva->date);
            Session::flash('message',$message);
            return redirect()->route('home');
           
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource=Resource::find($id);
        return view('reserva',compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}