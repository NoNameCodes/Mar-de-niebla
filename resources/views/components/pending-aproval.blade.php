<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-header />

@if (session('message'))
    <div class="flex justify-center">
        <div class="text-xl border-2 border-green-400 bg-green-200 rounded-md  mt-10 p-10">
            {{ session('message') }}
        </div>
    </div>
@endif
<div class="flex  flex-col items-center m-6">
    <h1 class="text-orange-400 mx-6 my-20 text-6xl">Validaciones pendientes</h1>
    <div class="flex  flex-col justify-center m-6">
        @forelse ($users as $user)
            <div class="flex flex-row justify-between items-center m-2">
                <p class="text-left text-3xl mr-36">{{ $user->email }}</p>
                <div class="flex flex-row justify-center w-30 h-20">
                    <div class="flex items-center w-20 h-20">
                        <a class="flex justify-center  w-10 bg-[#92C954] rounded-full"
                            href="{{ route('admin.users.approve', $user->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white">
                                <path fillRule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center w-20 h-20">
                        <a class="flex justify-center w-10 h-10 bg-[#E61818] rounded-sm pt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div>
                <p class="rounded-md bg-gray-200 p-6">¡No hay organizaciones pendientes por aprobar!</p>
            </div>
        @endforelse
    </div>
    <div class="m-20">
        <a href="{{ route('admin.users.index') }}">
            <button id="btnAdd"
                class=" px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] hover:bg-[#ffba25] duration-300 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Gestionar
                organizaciones</button>
        </a>
    </div>
</div>
<x-footer />
