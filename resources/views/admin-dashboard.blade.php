@extends('layouts.app')
<x-header />
<div class="flex flex-col items-center justify-center">
    <h1 class="mx-6 mt-20 mb-6 text-3xl text-orange-400">Gestionar organizaciones</h1>
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
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                            fill="currentColor">
                            <a href="">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </a>
                        </svg>
                    </div>
                </div>
            @empty
                <div>
                    <p class="flex justify-center rounded-md bg-gray-200 p-6">No hay organizaciones registradas.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
    <div class="flex flex-rol justify-center">
    </div>
    <div class="m-2">
        <a href="{{ route('admin.users.pending.index') }}">
            <button
                class="text-md mx-auto block rounded-md bg-[#F8981D] px-6 py-2 font-semibold text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] duration-300 hover:bg-[#ffba25]">Validaciones
                Pendientes</button>
        </a>
    </div>
</div>
<x-footer />
