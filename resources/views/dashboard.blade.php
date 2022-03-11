

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
        <livewire:resource-list />
    </div>

{{-- <div class="py-6 flex justify-center">
    <dh-component>
        <div class="px-6 flex flex-wrap">
            <button class="mx-2 my-2 bg-orange-500 transition duration-150 ease-in-out hover:bg-orange-500 rounded text-white px-8 py-2 text-s focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-600">Añadir nuevo recurso</button>
        </div>
    </dh-component>
</div> --}}

    <x-card></x-card>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
   
    
    {{-- <x-card-form-page/> --}}
</x-app-layout>
