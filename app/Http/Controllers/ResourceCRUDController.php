<?php
namespace App\Http\Controllers;
use App\Models\Resource;
use Illuminate\Http\Request;
class ResourceCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['resources'] = Resource::orderBy('id','desc')->paginate(5);
return view('resources.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('resources.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'description' => 'required',
'img' => 'required'
]);
$resource = new Resource;
$resource->name = $request->name;
$resource->description = $request->description;
$resource->img = $request->img;
$resource->user_id = $request->user_id;
$resource->location_id = $request->location_id;
$resource->save();
return redirect()->route('resources.index')
->with('success','Resource has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\resource  $resource
* @return \Illuminate\Http\Response
*/
public function show($id)
{
    $resource=Resource::find($id);
    return view('show',compact('resource'));

} 
/**
* Show the form for editing the specified resource.
*   
* @param  \App\Resource  $resource
* @return \Illuminate\Http\Response
*/
public function edit(Resource $resource)
{
return view('resources.edit',compact('resource'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\resource  $resource
* @return \Illuminate\Http\Response
*/
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
->with('success','Resource Has Been updated successfully');
}

/**
* Remove the specified resource from storage.
*
* @param  \App\Resource  $resource
* @return \Illuminate\Http\Response
*/
public function destroy(Resource $resource)
{
$resource->delete();
return redirect()->route('resources.index')
->with('success','Resource has been deleted successfully');
}
}   