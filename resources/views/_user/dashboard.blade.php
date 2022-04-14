@extends('layouts.app', ['title' => 'Dashboard | Barrio Oeste'])
@section('main')
    <div class="flex flex-col">
        <div>
            @if (Session::has('message'))
                <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
                    {{ session('message') }}
                </div>
            @elseif (Session::has('success'))
                <div class="lg:text-xl sm:text-md border-2 border-green-400 bg-green-200 rounded-md m-5 p-16">
                    {{ session('success') }}
            @endif
        </div>
        <x-button-add />
        <div class="ms:w-4/5 md:w-4/5 lg:w-2/5">
            <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">
                @forelse ($resources as $resource)
                    <x-card :resource="$resource" :reservas="$reservas" />
                @empty
                    <div class="flex flex-col items-center m-5">
                        <p class="flex justify-center rounded-md bg-gray-200 p-6">¡Aún no has añadido ningún recurso!
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
