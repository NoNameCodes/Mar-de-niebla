@extends('layouts.app', ['title' => 'Añadir Recurso | Barrio Oeste'])
@section('main')
    <div class="flex flex-col items-center justify-center m-3">
        <form action="{{ route('resources.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="w-100 h-100 bg-white border-orange-400 border-2 rounded-md mx-8 mt-10 mb-10">
                <div class=" bg-white rounded-md px-5 py-3 max-w-2xl">
                    <div class="space-y-4 px-12 flex flex-col items-center">
                        <div class="mb-1 pt-0 relative flex w-full">
                            <input type="text" name="name" placeholder="Nombre del recurso"
                                class="px-3 py-2 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-m border-orange-400 border-1 rounded-md outline-none w-full"
                                required />
                        </div>

                        <x-location :location="$location" />

                        <div class="py-1 mb-0">
                            <textarea id="description" cols="32" rows="5" name="description" placeholder="Descripción/Incidencias"
                                class=" outline-none px-2 text-m border-orange-400 border-1 rounded-md w-full"
                                required></textarea>
                        </div>

                        <div class="">
                            <x-card-multiselect :users="$users" />
                        </div>

                        <div class="py-1">
                            <label class="block">
                                <input name="img" type="file"
                                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-6 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white 
                                    hover:file:bg-[#ffba25]"
                                    required />
                            </label>
                        </div>

                        <div class="place-items-center h-26 mt-3">
                            <button type="submit"
                                class="px-4 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#92C954] hover:bg-[#85f307] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <x-button-close />
    </div>
@endsection
