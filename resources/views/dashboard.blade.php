<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

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
        <x-button-add />
        <div class="ms:w-4/5 md:w-4/5 lg:w-2/5">
            <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">
                @forelse ($resources as $resource)
                    <x-card :resource="$resource" />
                @empty
                    <div class="flex flex-col items-center m-5">
                        <p class="flex justify-center rounded-md bg-gray-200 p-6">¡Aún no has añadido ningún recurso!
                        </p>
                    </div>
                @endforelse
                <div>{{ $resources->links() }}</div>
            </div>
        </div>
    </main>
    <x-footer />
</body>

</html>
