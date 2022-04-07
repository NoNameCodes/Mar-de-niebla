<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<x-header />

<div class="m-2 grid grid-cols-2 gap-8">
    <div class="m-2">
        <img src="{{ asset("storage/img/{$resource->img}") }}" alt="photo de recurso" class="rounded-xl" />
    </div>
    <div class="flex w-3/4">
        <div class="flex flex-col">
            <p class="align-middle p-2 font-extrabold text-3xl">{{ $resource->name }}</p>
            <p class="italic p-2 font-thin">{{ $resource->description }}</p>
            <div class="flex flex-col justify-center p-2 mt-10">
                <x-button-add-reservation :resource="$resource" />
            </div>
        </div>
    </div>
</div>
</div>
<hr class="m-10" />
<div class="flex justify-center mb-40">
    <livewire:resource-list />
</div>
<x-footer />
