<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mis reservas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<x-header />

<div class="flex justify-center">
    <form action="{{ route('location.update',$location->id) }}"  method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-orange-400 mx-6 mt-20 mb-6 text-3xl">Editar localizaciones</h1>
        <div>
        <input type="text" placeholder="Introduce tu dirección"
                    class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3]  mb-6 " name="address" value="{{$location->address}}" required>
                    <button id="btnReserve"
                    class="bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2"
                    type="submit">
                    Aceptar cambios
                </button>
         </div>
        <a href="{{ route('location.vista') }}"class="bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2 mt-8 flex justify-center">Lista de localizaciones</a>
    </form>
</div>
    

 <x-footer />