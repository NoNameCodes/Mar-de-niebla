<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<x-header />

<div class="m-2 grid grid-cols-2 gap-8">
    <div class="m-2">
        <img src="{{ $resource->img }}" alt="photo de recurso" class="rounded-xl" />
    </div>

    <div class="flex w-3/4">
        <div class="flex flex-col">
            <p class="align-middle p-2 font-extrabold text-3xl">{{ $resource->name }}</p>
            <p class="italic p-2 font-thin">{{ $resource->description }}</p>
            <div class="flex flex-col justify-center p-2 mt-10">
                <button
                    class="btn  inline-block select-none no-underline align-middle  cursor-pointer whitespace-nowrap px-4 py-1.5 rounded text-base mt-6 font-medium leading-6 tracking-tight text-white text-center border-0 bg-[#92C954] hover:bg-[#85f307] duration-300"
                    type="button">Reservar</button>
            </div>
        </div>
    </div>
</div>
</div>
<hr class="m-10" />
<div class="flex justify-center mb-20">
    <livewire:resource-list />
</div>



