@extends('layouts.app', ['title' => 'Home | Barrio Oeste'])
@section('main')
    <div>
        <x-button-add />
        <div class="flex justify-center">
            @if (Session::has('message_location'))
                <div class="text-xl border-2 border-red-400 bg-red-200 rounded-md p-10 mb-6">
                    {{ session('message_location') }}
                </div>
            @endif
        </div>
        <div class="flex justify-center">
            @if (session('success'))
                <div class="text-xl border-2 border-green-400 bg-green-200 rounded-md  mb-10 p-10">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="flex justify-center">
            @if (Session::has('message'))
                <div class="text-xl border-2 border-green-400 bg-green-200 rounded-md p-10">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="flex justify-center">
            @if (Session::has('modification'))
                <div class="lg:text-xl sm:text-md border-2 border-green-400 bg-green-200 rounded-md m-5 p-16">
                    {{ session('modification') }}
                </div>
            @endif

        </div>
        <livewire:resource-list />        
    </div>
@endsection
