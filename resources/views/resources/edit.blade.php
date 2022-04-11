<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Resource Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Resource</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('resources.update', $resource->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resource Name:</strong>
                        <input type="text" name="name" value="{{ $resource->name }}" class="form-control"
                            placeholder="Resource name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resource Description:</strong>
                        <input type="text" name="description" class="form-control" placeholder="Resource Description"
                            value="{{ $resource->description }}">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resource Img:</strong>
                        <input type="img" name="img" class="form-control" placeholder="Resource img"
                            value="{{ $resource->img }}">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User_id:</strong>
                        <input type="" name="user_id" class="form-control" placeholder="user_id"
                            value="{{ $resource->user_id }}">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resource Adress:</strong>
                        <input type="" name="location_id" value="{{ $resource->location_id }}" class="form-control"
                            placeholder="Resource Adress">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>

{{-- <x-guest-layout>
    <x-header />
    <div class="flex flex-col items-center m-6">
        <form action="{{ route('resources.update',$resource->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-80 h-100 bg-white border-orange-400 border-2 rounded-md mx-8 mt-10 mb-10">
                <div class=" bg-white rounded-md px-9 py-10 max-w-2xl">
                    <div class="space-y-4 px-15">

                        <div class="mb-3 pt-0">
                            <input type="text" name="name" placeholder="Nombre del recurso"
                                class="px-3 py-2 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-m border-orange-400 border-1 rounded-md outline-none focus:outline-none focus:ring w-full"  value="{{ $resource->name }}" required/>
                        </div>

                        <x-card-multiselect :users="$users" />

                        <x-location :locations="$locations" />

                        <div class="py-1 mb-0">
                            <textarea id="description" cols="28" rows="5" name="description" placeholder="Descripción/Incidencias"
                                class=" outline-none px-2 text-m border-orange-400 border-1 rounded-md"  required>{{$resource->description }}</textarea>
                        </div>

                        <div class="py-1">
                            <label class="block">
                                <input name="img" type="file"
                                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-6 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white hover:file:bg-violet-100"  value="{{ $resource->img }}" required />
                            </label>
                        </div>


                        <div class="grid grid-cols-2 gap-1 place-items-center h-26 mt-3">
                            <button
                                class=" px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#A9171C]"><a
                                    href="{{ url('/dashboard') }}">Cerrar</a></button>
                            <button type="submit"
                                class=" px-4 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#92C954]">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>

<x-footer /> --}}