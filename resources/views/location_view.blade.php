<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Location List</title>

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

<body>
    <x-header />
    <div class="flex justify-center">
        @if (Session::has('message'))
            <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <x-location-list :location="$location" />
    <div class="flex justify-center">
        <a href="{{ route('location.create') }}"
            class="w-60 bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2 mt-8 flex justify-center">Añadir
            localización</a>
    </div>
    <x-footer />
