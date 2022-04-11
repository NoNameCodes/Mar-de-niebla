@extends('layouts.app')
<x-header />
<div class="flex justify-center">
    <form action="{{ route('location.update', $location->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-orange-400 mx-6 mt-20 mb-6 text-3xl">Editar localizaciones</h1>
        <div>
            <input type="text" placeholder="Introduce tu dirección"
                class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3]  mb-6 " name="address"
                value="{{ $location->address }}" required>
            <button id="btnReserve"
                class="bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2"
                type="submit">
                Aceptar cambios
            </button>
        </div>
        <a href="{{ route('location.vista') }}"
            class="bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2 mt-8 flex justify-center">Cancelar
            edición</a>
    </form>
</div>
<x-footer />
