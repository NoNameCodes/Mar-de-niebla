<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<x-header />
<main>
   
   
   
    <div class="m-2 flex">
        <div class="m-2 w-1/4">
            <img src="{{ $resource->img }}" alt="photo de recurso" class="rounded-xl" />
        </div>
    
        <div class="flex w-3/4">
            <div class="flex flex-col">
                <p class="align-middle p-2 font-extrabold text-3xl">{{ $resource->name }}</p>
               
            </div>
        </div>
    </div>
     
    <div class="ms:w-4/5 md:w-4/5 lg:w-2/5">
        <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1">

       @forelse ($reservations as $reservation)
            <ul>
                <li class="flex justify-start border-2 border-[#000]"><p class="border-2 border-[#FF0000] text-left">{{ $reservation->date }}</p> - <p class="border-2 border-[#800080]">{{ $reservation->name }}</p></li>
            </ul>
        @empty
            <div class="flex flex-col items-center m-5">
                <p class="flex justify-center rounded-md bg-gray-200 p-6">¡Este recurso no ha tenido reservas todavia!
                </p>
                <button id="btnAdd"
                    class="mt-5 px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"><a
                        href="{{ url('/home') }}">Volver</a></button>
            </div>
        @endforelse 
        </div>         
       
    </div>
   
       
    
</main>


<x-footer />
