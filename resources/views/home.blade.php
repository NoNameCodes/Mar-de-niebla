@extends('layouts.app')
@section('main')
    <div class="flex flex-col justify-center items-center">
        <x-button-add />
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
        <div class="flex flex-row justify-center w-2/5 sm:w-4/5 md:w-4/5 lg:w-2/5">
            <livewire:resource-list />
        </div>
    </div>
@endsection
