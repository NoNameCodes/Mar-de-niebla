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

<body>
    <x-header />
    <main class="flex flex-col items-center">
        <x-button-add  />
        <div class="flex justify-center text-red-700 ">
            @if (Session::has('message'))
                {{ session('message') }}
            @endif
        </div>
        <div class="ms:w-4/5 md:w-4/5 lg:w-2/5">
            <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">
                @forelse ($resources as $resource)
                    <x-card :resource="$resource" />
                @empty
                    <div class="flex flex-col items-center m-5">
                        <p class="flex justify-center rounded-md bg-gray-200 p-6">¡No tienes
                            nada
                            reservado
                            aún!
                        </p>
                        <button id="btnAdd"
                            class="mt-5 px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] hover:bg-[#ffba25] duration-300 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"><a
                                href="{{ url('/home') }}">Recursos disponibles</a></button>
                    </div>
                @endforelse
                
            </div>
        </div>
    </main>
    <x-footer />
</body>

</html>
