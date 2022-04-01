<div>
    <!-- component -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap");

        body {
            font-family: "Roboto", sans-serif;
        }

    </style>

    <div class="flex flex-col justify-center bg-white rounded-xl">
        <div class="ms:w-90 md:w-90 border-b-2 border-[#faba67] flex">
            <div class="w-3/12 p-4">
                <a href="{{ route('resource', $resource) }}">
                    <img src="storage/img/{{ $resource->img }}" />
                </a>
            </div>
            <div class="flex justify-between w-3/4">
                <div class="flex flex-col justify-center">
                    <a href="{{ route('resource', $resource) }}">
                        <p class="align-middle p-2 font-extrabold text-xl">{{ $resource->name }}</p>
                        @if (Route::currentRouteName() == 'misreservas')
                            @foreach ($reservas as $reserva)
                                @if ($reserva->resource_id === $resource->id)
                                    <p class="italic p-2 font-thin">{{ $reserva->name }}</p>
                                    <p class="italic p-2 font-thin">{{ $reserva->date }}</p>
                                @endif
                            @endforeach
                        @else
                            <p class="italic p-2 font-thin">Ver registro</p>
                        @endif
                    </a>
                </div>

                <div class="flex flex-col justify-center p-6">
                    @if (Route::currentRouteName() == 'dashboard')
                        <div class="flex flex-row">
                            <a href="{{ route('resources.edit', $resource->id) }}">
                                <button><i class="fa-solid fa-pen-to-square text-green-500 text-2xl m-3"></i></button>
                            </a>
                            <form action="{{ route('resources.destroy', $resource->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('resources.edit', $resource->id) }}"></a>
                                @csrf
                                @method('DELETE')
                                <button><i class="fa-solid fa-trash text-red-700 text-2xl m-3"></i></button>
                            </form>
                        </div>
                    @elseif (Route::currentRouteName() == 'misreservas')
                        <button
                            class="btn inline-block select-none no-underline align-middle cursor-pointer whitespace-nowrap px-4 py-1.5 rounded text-base font-medium leading-6 tracking-tight text-white text-center border-0 bg-[#F8981D] hover:bg-[#ffba25]"
                            type="button"
                            onclick="location.href = '{{ route('removereserve', $reserva->id) }}'">Anular
                            Reserva</button>
                    @else
                        <button
                            class="btn inline-block select-none no-underline align-middle cursor-pointer whitespace-nowrap px-4 py-1.5 rounded text-base font-medium leading-6 tracking-tight text-white text-center border-0 bg-[#92C954] hover:bg-[#85f307] duration-300"
                            type="button"
                            onclick="location.href = '{{ route('reserva.create', $resource->id) }}'">Reservar</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
