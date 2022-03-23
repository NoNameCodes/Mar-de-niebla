<x-guest-layout>

    <x-header />

    <div>
        <form action="{{ route('resources.store') }}" method="post">
            @csrf

            <div class="w-80 h-100 bg-white border-orange-400 border-2 rounded-md mx-8 mt-10 mb-10">
                <div class=" bg-white rounded-md px-9 py-10 max-w-2xl">
                    <div class="space-y-4 px-15">

                        <div class="mb-3 pt-0">
                            <input type="text" name="name" placeholder="Nombre del recurso"
                                class="px-3 py-3 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-orange-400 outline-none focus:outline-none focus:ring w-full" />
                        </div>

                        <x-card-multiselect :users="$users" />

                        <x-location :location="$location" />

                        <div class="py-1 mb-0">
                            <textarea id="description" cols="23" rows="5" name="description" placeholder="Descripción/Incidencias"
                                class=" outline-none px-2 text-m border-orange-400 border-1 rounded-md"></textarea>
                        </div>

                        <div class="mb-5 mt-0 pt-0">
                            <input type="text" name="img" placeholder="Adjuntar/Cambiar foto"
                                class="px-3 py-3 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-orange-400 outline-none focus:outline-none focus:ring w-full" />
                        </div>

                        <div class="grid grid-cols-2 gap-1 place-items-center h-26 mt-3">
                            <button
                                class=" px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#A9171C]"><a
                                    href="{{ url('/dashboard') }}">Cerrar</a></button>
                            <button type="submit"
                                class=" px-4 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#92C954]">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

</x-guest-layout>

<x-footer />
