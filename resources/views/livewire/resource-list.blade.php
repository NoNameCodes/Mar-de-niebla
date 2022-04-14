<div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">
    @foreach ($resources as $resource)
        @for ($i = 0; $i < count($resource->user); $i++)
            @if (Auth::user()->id == $resource->user[$i]->id)
                <x-card :resource="$resource" />
            @endif
        @endfor
    @endforeach
    <div class="m-1.5">{{ $resources->links() }}</div>
</div>
