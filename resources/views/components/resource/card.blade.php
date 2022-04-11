<div class="flex flex-row p-2 border-b-2 border-[#F8981D]">
    <a href="{{ route('resources.show', $resource->id) }}">
        <img class="max-w-[250px] p-2" src="{{ asset("storage/img/{$resource->img}") }}" alt="imagen de recurso">
    </a>
    <div class="flex flex-col grow justify-between p-2">
        <div>
            <h3 class="font-bold text-xl">{{ $resource->name }}</h3>
            <p class="italic text-gray-400">{{ $resource->description }}</p>
        </div>
        <div>
            @if (Auth::check() && Auth::user()->id == $resource->user_id)
                <a class="underline text-gray-600" href="{{ route('history', $resource->id) }}">Ver Historial</a>
            @endif
        </div>
    </div>
    <div class="flex flex-row p-2">
        <x-buttons.reserve :resource="$resource" />
    </div>
</div>
