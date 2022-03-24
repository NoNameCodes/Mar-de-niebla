<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-header>
    <div>
        <button type="button" data-dropdown-toggle="dropdown"><i class="fa-solid fa-user fa-2x "
                style="color: #F8981D"></i> </button>

<<<<<<< HEAD
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-scroll border-b border-gray-200 rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nombre</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Email</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Fecha de Creación</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only"></span>
                                        </th>
                                    </tr>
                                </thead>
                                @forelse ($users as $user)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full" src="" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">
                                                    {{ $user->email }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold">{{ $user->created_at }}</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a id='btnAceptar' href="{{ route('admin.users.approve', $user->id) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">Aceptar</a>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No users found.</td>
                                        </tr>
                                    </tbody>
                                @endforelse
                            </table>
                        </div>
=======
        <!-- Dropdown menu -->
        <div class="hidden bg-[#F8981D] text-base z-50  " id="dropdown">

            <ul class="py-1" aria-labelledby="dropdown">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="text-sm hover:bg-gray-300 flex justify-center text-gray-700 block px-4 py-2">Dashboard</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-sm hover:bg-gray-300 flex justify-center text-gray-700 px-4 py-2">Logout</button>
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
>>>>>>> restyle/caio-admin-dashboard
                    </div>
                </div>
            </div>
        @empty
            <div>
                <p>No hay usuarios pendientes por aprovar!</p>
            </div>
        @endforelse
    </div>
    <div class="m-20">
        <a href="{{ route('admin.users.index') }}">
            <button
                class="bg-orange-400 text-white  text-3xl rounded-lg h-40 w-96 m-5 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Gestionar
                organizaciones</button>
        </a>
    </div>
</div>
<x-footer />
