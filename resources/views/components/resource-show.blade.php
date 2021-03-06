<div class=" ">
    <div class="flex flex-col justify-center items-center bg-white">
        <div class="ms:w-full md:w-full lg:w-2/5 border-b-4 border-orange-200 flex">
            <div class="w-3/12 p-4">
                <img src="{{ asset("storage/img/{$resource->img}") }}" alt="Imagen del recurso" class="rounded-xl " />
            </div>
            <div class="flex flex-col justify-between w-3/4">
                <div class="flex flex-col justify-center">
                    <p class="align-middle p-2 font-extrabold text-xl">{{ $resource->name }}</p>
                </div>
                <div>
                    <p>Recoger y entregar en: {{ $resource->location->address }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
