@extends('layouts.app', ['title' => 'Añadir Recurso'])
@section('main')
    <div class="flex justify-center">
        <form action="{{ route('resources.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="w-80 h-100 bg-white border-orange-400 border-2 rounded-md mx-8 mt-10 mb-10">
                <div class=" bg-white rounded-md px-9 py-10 max-w-2xl">
                    <div class="space-y-4 px-15">

                        <div class="mb-3 pt-0">
                            <input type="text" name="name" placeholder="Nombre del recurso"
                                class="px-3 py-2 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-m border-orange-400 border-1 rounded-md outline-none focus:outline-none focus:ring w-full" />
                        </div>

                        <x-card-multiselect :users="$users" />

                        <x-location :location="$location" />

                        <div class="py-1 mb-0">
                            <textarea id="description" cols="28" rows="5" name="description" placeholder="Descripción/Incidencias"
                                class=" outline-none px-2 text-m border-orange-400 border-1 rounded-md"></textarea>
                        </div>

                        <div class="py-1">
                            <label class="block">
                                <input name="img" type="file"
                                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-6 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white hover:file:bg-violet-100" />
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
@endsection
