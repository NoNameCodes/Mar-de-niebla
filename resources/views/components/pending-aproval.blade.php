@extends('layouts.app')
<x-header />
<div class="flex flex-col items-center justify-center">
    <h1 class="mx-6 mt-20 mb-6 text-3xl text-orange-400">Peticiones pendientes</h1>
    @if (session('message'))
        <div class="flex justify-center">
            <div class="text-xl border-2 border-green-400 bg-green-200 rounded-md mt-10 p-10">
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
                    <div class="flex flex-row">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                            fill="currentColor">
                            <a href="{{ route('admin.users.approve', $user->id) }}">
                                <path fillRule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clipRule="evenodd" />
                            </a>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                            fill="currentColor">
                            <a href="{{ route('admin.users.reject', $user->id) }}">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </a>
                        </svg>
                    </div>
                </div>
            @empty
                <div>
                    <p class="flex justify-center rounded-md bg-gray-200 p-6 m-10 text-center">¡No hay organizaciones
                        pendientes por
                        aprobar!
                    </p>
                </div>
            @endforelse
        </div>
    </div>
    <div class="m-2">
        <a href="{{ route('admin.users.index') }}">
            <button
                class="text-md mx-auto block rounded-md bg-[#F8981D] px-6 py-2 font-semibold text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] duration-300 hover:bg-[#ffba25]">Gestionar
                organizaciones</button>
        </a>
    </div>
</div>
<x-footer />
