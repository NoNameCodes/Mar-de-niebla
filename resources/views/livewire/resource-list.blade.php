<div class="border-2 border-[#F8981D] rounded-xl m-1.5 w-2/5 py-1">
    @foreach ($resources as $resource)
        <x-resource.card :resource="$resource" />
    @endforeach
    {{-- <div class="m-1.5">{{ $resources->links() }}</div> --}}
</div>
