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
</head>

<x-header>
    <div>
        <button type="button" data-dropdown-toggle="dropdown"><i class="fa-solid fa-user fa-2x"
                style="color: #F8981D"></i> </button>
        <!-- Dropdown menu -->
        <div class="hidden bg-[#F8981D] text-base z-50 rounded flex justify-center" id="dropdown">
            <ul class="py-1" aria-labelledby="dropdown">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="text-sm hover:bg-gray-300 flex justify-center text-gray-700 block px-8 py-2">Dashboard</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-sm hover:bg-gray-300 flex justify-center text-gray-700 block px-8 py-2">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
</x-header>

<x-button-add />

<main class="flex justify-center mb-3">
    <div class="ms:w-4/5 md:w-4/5 lg:w-2/5">
        <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">
            @foreach ($resources as $resource)
                <x-card :resource="$resource" />
            @endforeach
            <div>{{ $resources->links() }}</div>
        </div>
    </div>
</main>

<x-footer />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</html>
