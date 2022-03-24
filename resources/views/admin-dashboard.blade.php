<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-header>
    <div>
        <button type="button" data-dropdown-toggle="dropdown"><i class="fa-solid fa-user fa-2x "
                style="color: #F8981D"></i> </button>

        <!-- Dropdown menu -->
        <div class="hidden bg-[#F8981D] text-base z-50  " id="dropdown">

            <ul class="py-1" aria-labelledby="dropdown">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="text-sm hover:bg-gray-300 text-gray-700 block px-4 py-2">Dashboard</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-sm hover:bg-gray-300 flex justify-center text-gray-700  px-4 py-2">Logout</button>
                    </form>
                </li>

            </ul>
        </div>
        <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>


</x-header>
@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
<div class="flex flex-col items-center m-6">
    <h1 class="text-orange-400 mx-6 my-20 text-6xl">Gestionar organizaciones</h1>
    <div class="flex  flex-col justify-center m-6">
        @forelse ($users as $user)
            <div class="flex flex-row items-center justify-between m-2">
                <p class="text-3xl mr-36">{{ $user->email }}</p>
                <div class="flex flex-row justify-center w-30 h-20">
                    <div class="flex items-center justify-center w-20 h-20">
                        <a href="{{ route('admin.users.delete', $user->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div>
                <p class="flex justify-center border-2 border-green-400 bg-green-100">No hay usuarios registrados.
                </p>
            </div>
        @endforelse
    </div>
    <div class="m-20">
        <a href="{{ route('admin.users.pending.index') }}">
            <button
                class="bg-orange-400 text-white  text-3xl rounded-lg h-40 w-96 m-5 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Validaciones
                pendientes</button>
        </a>
    </div>
</div>
<x-footer />
