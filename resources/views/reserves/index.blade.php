@extends('layouts.app', ['title' => 'Mis Reservas'])
@section('main')
    <div class="flex flex-col justify-center items-center">
        <x-button-add />
        <div class="flex justify-center">
            @if (Session::has('message'))
                <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">
            @forelse ($resources as $resource)
                <x-card :resource="$resource" />
            @empty
                <div class="flex flex-col items-center m-5">
                    <p class="flex justify-center rounded-md bg-gray-200 p-6">¡No tienes nada reservado aún!</p>
                    <button id="btnAdd"
                        class="mt-5 px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] hover:bg-[#ffba25] duration-300 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"><a
                            href="{{ url('/home') }}">Recursos disponibles</a></button>
                </div>
            @endforelse
        </div>

    </div>
@endsection
