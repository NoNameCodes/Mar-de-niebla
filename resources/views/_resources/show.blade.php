@extends('layouts.app', ['title' => $resource->name . ' | Barrio Oeste'])
@section('main')
    <div class="mx-auto my-2 flex justify-between w-11/12 tablet:w-8/12 desktop:w-5/12">
        <div class="flex justify-between items-center m-2 w-3/12">
            <img src="{{ asset("storage/img/{$resource->img}") }}" alt="Imagen del recurso" class="rounded-xl" />
        </div>
        <div class="flex w-8/12">
            <div class="flex flex-col w-full">
                <p class="align-middle p-2 font-extrabold text-2xl laptop:text-3xl">{{ $resource->name }}</p>
                <p class="italic p-2 font-thin">{{ $resource->description }}</p>
                <div class="flex justify-center p-2 mt-2">
                    <x-button-add-reservation :resource="$resource" />
                </div>
            </div>
        </div>
    </div>
    <hr class="m-10" />
    <div>
        <livewire:resource-list />
    </div>
@endsection
