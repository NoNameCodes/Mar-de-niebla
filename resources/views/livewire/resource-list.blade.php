<div>
    @foreach($resources as $resource)
    <x-card :resource="$resource"/>
    {{-- <img src="{{ $resource->img }}" class="card-img-top" alt="..."> --}}
    {{-- <img src="	
    https://api.lorem.space/image/furniture?w=450&amp;amp;amp;amp;h=660" alt="">
    <h5 class="card-title">"{{ $resource->title }}"</h5> --}}
    @endforeach
    {{ $resources->links() }}
</div>
