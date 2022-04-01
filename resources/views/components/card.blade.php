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
                    <img src="img/{{ $resource->img }}" />
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
                            class="block text-white bg-[#F8981D] hover:bg-red-600 focus:ring-2 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#F8981D] dark:hover:bg-red-600 duration-700 dark:focus:ring-orange-300 backdrop-grayscale backdrop-brightness-40"
                            type="button" data-modal-toggle="defaultModal">
                            Anular reserva
                        </button>

                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center backdrop-contrast-50">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                                <div class="relative rounded-lg shadow bg-gray-700 backdrop-grayscale-0">

                                    <div class="flex justify-center items-start p-5 rounded-t border-b border-gray-600">
                                        <h3 class="text-lg font-bold lg:text-2xl text-white">
                                            ¿Seguro que quiere anular la reserva?
                                        </h3>
                                        <button type="button"
                                            class="bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center text-white"
                                            data-modal-toggle="defaultModal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="p-6 space-y-6">
                                        <p class="text-base leading-relaxed text-gray-500 text-gray-400">
                                            La única manera de poder volver a disponer del recurso será realizando
                                            todo el
                                            proceso de reserva de nuevo.
                                        </p>
                                    </div>
                                    <div
                                        class="flex justify-between p-6 space-x-2 rounded-b border-t border-gray-200 border-gray-600">
                                        <button data-modal-toggle="defaultModal" type="button"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-800"
                                            type="button"
                                            onclick="location.href = '{{ route('reserva.destroy', $reserva->id) }}'">Sí,
                                            anular</button>
                                        <button data-modal-toggle="defaultModal" type="button"
                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">No,
                                            cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
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
