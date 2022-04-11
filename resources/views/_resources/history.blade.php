@extends('layouts.app')
<x-header />
<h1 class="text-2xl text-center py-8 px-8">Historial de reservas del recurso <span
        class="font-black">"{{ $resource->name }}"</span></h1>
<div class="flex flex-col items-center pt-4">
    <img src="{{ asset("storage/img/{$resource->img}") }}" alt="photo de recurso"
        class="rounded-xl m-1 w-1/4 max-w-xxs" />
    <div class="ms:w-4/5 md:w-4/5 lg:w-2/5 content-center ">
        <div class="border-2 border-[#F8981D] rounded-xl my-4">

            @forelse ($reservations as $reservation)
                <ul class="py-4">
                    <li class="flex justify-start">
                        <p class="text-left mx-6">{{ $reservation->date }}</p> - <p class="mx-6">
                            {{ $reservation->name }}</p>
                    </li>
                </ul>

            @empty
                <div class="flex flex-col items-center m-5">
                    <p class="flex justify-center rounded-md bg-gray-200 p-6">¡Este recurso no ha tenido reservas
                        todavia!
                    </p>

                </div>
            @endforelse
        </div>

    </div>
    <button id="btnAdd"
        class="text-lg m-12 px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"><a
            href="{{ url('/home') }}">Volver</a></button>

</div>
<x-footer />
