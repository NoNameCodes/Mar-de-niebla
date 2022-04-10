<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barrio Oeste</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="antialiased">
    <x-header />
    <main class="flex flex-col items-center">
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

        <div class="flex justify-center ms:w-4/5 md:w-4/5 lg:w-2/5">
            <livewire:resource-list />
        </div>
    </main>
    <x-footer />
</body>

</html>