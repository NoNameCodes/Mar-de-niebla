<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use PhpParser\Builder\Use_;

class ResourceCRUDController extends Controller
{

    public function index()
    {
        $data['resources'] = Resource::orderBy('id', 'desc')->unique('id')->values()->all()->paginate(5);
        return view('resources.index', $data);
    }

    public function create()
    {
        $users = User::get();
        $location = Location::get();
        return view('_resources.create', compact('users', 'location'));
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
                $location->id = $request->location_id,

                "name" => $request->name,
                "description" => $request->description,
                "img" => $imageName,
                "user_id" => $user,
                "location_id" => $location->id,
            ]);
        }
        if ($location->id == null) {
            $message = 'El recurso no ha podido ser añadido ya que la localización no puede quedar vacía.Por favor añada una localización al recurso compartido';
            Session::flash('message_location', $message);
            return view('_user.home');
        }
        $resource->save();
        $usuario = User::all();
        $resource->user()->attach($user);
        foreach ($usuario as $usuarios) {
            $resource->user()->attach($request->input($usuarios->id));
        }
        return redirect('home')
            ->with('success', '¡Recurso creado correctamente!');
    }

    public function show($id)
    {
        return view('_resources.show', [
            'resource' => Resource::findOrFail($id)
        ]);
    }

    public function edit(Resource $resource)
    {
        $users = User::all();
        $location = Location::all();
        return view('_resources.edit', compact('resource', 'users', 'location'));
    }

    public function update(Request $request, $id)
    {

        $usuario = User::all();
        $resource = Resource::find($id);
        $resource->name = $request->name;
        $resource->description = $request->description;
        $resource->location_id = $request->location_id;
        $resource->user()->attach(Auth::user()->id);

        if ($request->hasFile("img")) {
            $directory = '\public_path("storage/img/")' . $resource->img;
            if (File::exists($directory)) {
                File::delete($directory);
            }
            $file = $request->file("img");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("storage/img/"), $imageName);
            $resource->img = $imageName;
        }
        foreach ($usuario as $usuarios) {
            $resource->user()->detach($request->input($usuarios->id));
        }
        foreach ($usuario as $usuarios) {
            $resource->user()->attach($request->input($usuarios->id));
        }
        $resource->update();
        return redirect()->route('dashboard')
            ->with('success', 'El recurso "' . $resource->name . '" ha sido editado con éxito.');
    }

    public function destroy(Resource $resource)
    {
        $resource->reservas()->delete();
        $resource->user()->detach();
        $resource->delete();
        $message = 'El recurso "' . $resource->name . '" ha sido borrado con éxito';
        Session::flash('message', $message);
        return redirect()->route('dashboard');
    }
}
