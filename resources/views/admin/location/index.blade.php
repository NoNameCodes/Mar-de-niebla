@extends('layouts.app')
<x-header />
<div class="flex justify-center">
    @if (Session::has('message'))
        <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
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
        class="w-60 bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2 mt-8 flex justify-center">Añadir
        localización</a>
</div>
<x-footer />
