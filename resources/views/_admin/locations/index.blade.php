@extends('layouts.app', ['title' => 'Localizaciones | Barrio Oeste'])
@section('main')
    <div>
        <div class="flex justify-center">
            @if (Session::has('message'))
                <div class="lg:text-xl sm:text-md border-2 border-green-400 bg-green-200 rounded-md m-5 p-16">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <x-location-list :location="$location" />
        <div class="flex justify-center">
            {{ $location->links() }}
        </div>
        <div class="flex justify-center">
            <a href="{{ route('location.create') }}"
                class="w-60 bg-[#F8981D] hover:bg-[#ffba25] text-white font-bold py-2 px-8 shadow-xl rounded mb-2 mt-8 flex justify-center">Añadir
                localización</a>
        </div>
    </div>
@endsection
