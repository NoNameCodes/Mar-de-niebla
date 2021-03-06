<div>
    <div class="flex flex-col justify-center bg-white rounded-xl">
        <div class="ms:w-90 md:w-90 border-b-2 border-[#faba67] flex">
            <div class="w-3/12 p-4">
                <x-anchor-img-show :resource="$resource" />
            </div>
            <div class="flex justify-between items-center w-9/12 mr-6">
                <div class="w-full flex flex-col justify-center">
                    <x-anchor-name-show :resource="$resource" />
                    @if (Route::currentRouteName() == 'misreservas')
                        @foreach ($reservasFuture as $reserva)
                            @if ($reserva->resource_id === $resource->id)
                                <div class="w-full flex flex-row justify-between p-2">
                                    <p class="italic p-2 font-thin text-left">
                                        {{ \Carbon\Carbon::parse($reserva->date)->format('d/m/Y') }} -
                                        {{ $reserva->name }}</p>
                                    <div class="flex justify-center column-row">
                                        <x-button-delete-reservation :reserva="$reserva" class="mx-2" />
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
                        <x-button-edit-resource :resource="$resource" />
                        <form action="{{ route('resources.destroy', $resource->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <x-button-delete-resource />
                        </form>
                    </div>
                @elseif(Route::currentRouteName() == 'home')
                    <x-button-add-reservation :resource="$resource" />
                @elseif(Route::currentRouteName() == 'resources')
                    <x-button-add-reservation :resource="$resource" />
                @endif

            </div>
        </div>
    </div>
</div>
