@extends('layouts.app', ['title' => 'Historial de Recurso | Barrio Oeste'])
@section('main')
    <div>
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
                                <p class="text-left mx-6">{{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y') }}
                                </p>
                                - <p class="mx-6">{{ $reservation->name }}</p> - <p class="mx-6">
                                    {{ $reservation->user->name }}</p> - <p class="mx-6">
                                    {{ $reservation->phone }}</p> - <p class="mx-6">
                                    {{ $reservation->coments }}</p>
                            </li>
                        </ul>
                    @empty
                        <div class="flex flex-col items-center m-5">
                            <p class="flex justify-center rounded-md bg-gray-200 p-6">¡Este recurso no tiene historial de
                                reservas todavia!
                            </p>
                        </div>
                    @endforelse

                </div>
            </div>
            <x-button-back-to-home />
        </div>
    </div>
@endsection