@extends('layouts.app', ['title' => 'Mis Reservas | Barrio Oeste'])
@section('main')
    <div>
        <x-button-add />
        <div class="flex justify-center">
            @if (Session::has('message'))
                <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="flex justify-center">
            <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1 w-11/12 tablet:w-6/12 desktop:w-5/12">
                @forelse ($resources as $resource)
                    <x-card :resource="$resource" :reservasFuture="$reservasFuture" />
                @empty
                    <div class="flex flex-col items-center m-5">
                        <p class="flex justify-center rounded-md bg-gray-200 p-6">¡No tienes
                            nada
                            reservado
                            aún!
                        </p>
                        <x-button-back-to-home />
                    </div>
                @endforelse
                
            </div>
        </div>
    </div>
@endsection
