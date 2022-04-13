<div>
    <div class="flex flex-col justify-center bg-white rounded-xl">
        <div class="ms:w-90 md:w-90 border-b-2 border-[#faba67] flex">
            <div class="w-3/12 p-4">
                <a href="{{ route('resources.show', $resource) }}">
                    <img src="{{ asset("storage/img/{$resource->img}") }}" />
                </a>
            </div>
            <div class="flex justify-between w-9/12">
                <div class="w-full flex flex-col justify-center">
                    <a href=" {{ route('resources.show', $resource) }}">
                    <p class="align-middle font-extrabold text-xl">{{ $resource->name }}</p></a>
                    @if (Route::currentRouteName() == 'misreservas')
                                     
                        @foreach ($reservasFuture as $reserva)
                            @if ($reserva->resource_id === $resource->id)
                                <div class="w-full flex flex-row justify-between p-2">
                                    <p class="italic p-2 font-thin text-left">{{ \Carbon\Carbon::parse( $reserva->date)->format('d/m/Y') }} -
                                        {{ $reserva->name }}</p>
                                        <div class="flex justify-center column-row">
                                            <x-button-delete-reservation :reserva="$reserva" class="mx-2"/>
                                            <x-button-add-reservation :resource="$resource" />
                                        </div>
                                   <x-modal-delete-reservation :reserva="$reserva" />
                                </div>
                                
                            @endif
                        @endforeach
                    @else
                        <x-button-show-history :resource="$resource" />
                    @endif
                </div>

                @if (Route::currentRouteName() == 'dashboard')
                    <div class="flex flex-row items-center ">
                        <a href="{{ route('resources.edit', $resource->id) }}">
                            <button><i class="fa-solid fa-pen-to-square text-black justify-center text-2xl m-3"></i></button>
                        </a>
                        <form action="{{ route('resources.destroy', $resource->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('resources.edit', $resource->id) }}"></a>
                            @csrf
                            @method('DELETE')
                            <button><i class="fa-solid fa-trash  text-black text-2xl m-3"></i></button>
                        </form>
                    </div>
                @elseif(Route::currentRouteName() == 'home'|| 'resources')
                    {{-- <x-button-add-reservation :resource="$resource" /> --}}
                @elseif(Route::currentRouteNAme() =='misreservas')
                @endif
            </div>
        </div>
    </div>
</div>
