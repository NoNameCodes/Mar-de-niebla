<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ResourceCRUDController extends Controller
{
    public function index()
    {
        $data['resources'] = Resource::orderBy('id', 'desc')->paginate(5);
        return view('resources.index', $data);
    }

    public function create()
    {
        return view('resources.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile("img")) {
            $file = $request->file("img");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("storage/img/"), $imageName);

            $resource = new Resource([

                $user = Auth::user()->id,
                $location = Location::all(),
                $location->id = $request->location,

                "name" => $request->name,
                "description" => $request->description,
                "img" => $imageName,
                "user_id" => $user,
                "location_id" => $location->id,
            ]);
        }
        $resource->save();

        return redirect('home')
            ->with('success', '¡Recurso creado correctamente!');
    }

    public function show($id)
    {
        return view('resource', [
            'resource' => Resource::findOrFail($id)
        ]);
    }

    public function edit(Resource $resource)
    {
        return view('resources.edit', compact('resource'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
            'user_id' => 'required',
            'location_id' => 'required',
        ]);
        $resource = Resource::find($id);
        $resource->name = $request->name;
        $resource->description = $request->description;
        $resource->img = $request->img;
        $resource->user_id = $request->user_id;
        $resource->location_id = $request->location_id;
        $resource->save();
        return redirect()->route('resources.index')
            ->with('success', 'Resource Has Been updated successfully');
    }

    public function destroy(Resource $resource)
    {
        $resource->reservas()->delete();
        $resource->delete();
        $message = 'El recurso "' . $resource->name . '" ha sido borrado con éxito';
        Session::flash('message', $message);
        return redirect()->route('dashboard');
    }
}
