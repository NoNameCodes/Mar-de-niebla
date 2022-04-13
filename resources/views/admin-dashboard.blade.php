@extends('layouts.app')

<div class="flex flex-col items-center justify-center">
    <h1 class="mx-6 mt-20 mb-6 text-3xl text-orange-400">Gestionar organizaciones</h1>
    @if (session('message'))
        <div class="flex justify-center">
            <div class="text-xl border-2 border-red-400 bg-red-200 rounded-md mt-10 p-10">
                {{ session('message') }}
            </div>
        </div>
    @endif
    <div
        class="m-5 flex min-w-8/12 sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 flex-col items-center rounded-md border-2 border-[#faba67]">
        <div class="p-5 w-full">
            @forelse ($users as $user)
                <div class="flex w-11/12 flex-row items-center justify-between mx-2 p-2">
                    <div class="flex flex-col">
                        <p>{{ $user->name }}</p>
                        <p class="text-xs text-gray-500">{{ $user->email }}</p>
                    </div>
                    <x-button-delete-org :user="$user" />
                </div>
            @empty
                <div>
                    <p class="flex justify-center rounded-md bg-gray-200 p-6">No hay organizaciones registradas.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
    <div class="flex flex-row justify-center m-2">
        <x-button-pending-users />
    </div>
</div>
