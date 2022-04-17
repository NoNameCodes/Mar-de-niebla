@extends('layouts.app', ['title' => 'Dashboard | Barrio Oeste'])
@section('main')
    <div>
        <div>
            @if (Session::has('message'))
                <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
                    {{ session('message') }}
                </div>
            @elseif (Session::has('success'))
                <div class="lg:text-xl sm:text-md border-2 border-green-400 bg-green-200 rounded-md m-5 p-16">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <x-button-add />
        <div class="flex justify-center">
            <div class="border-2 border-[#F8981D] rounded-xl m-1.5 py-1 w-11/12 tablet:w-6/12 desktop:w-5/12">
                
                    @forelse ($resources as $resource)
                        <x-card :resource="$resource" :reservas="$reservas" />
                    @empty
                        <div class="flex flex-col items-center m-5">
                            <p class="flex justify-center rounded-md bg-gray-200 p-6">¡Aún no has añadido ningún recurso!
                            </p>
                        </div>
                    @endforelse
                    <div class="m-1.5">{{ $resources->links() }}</div>
            </div>
            
        </div>
    </div>
@endsection
