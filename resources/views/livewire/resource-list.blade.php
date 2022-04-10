<div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">
   
    @foreach ($resources as $resource)
     {{-- @dd(Auth::user()) --}}
     {{-- @dd($resource->id) --}}
     @for ($id =0 ; $id<count($resource->user) ; $id++)  
        {{-- @dd($resource->user[0]) --}}
     @if (Auth::user()->id==$resource->user[$id]->id) 
          <x-card :resource="$resource" />
       @endif
       @endfor
    @endforeach
    {{-- <div class="m-1.5">{{ $resources->links() }}</div> --}}
</div>
