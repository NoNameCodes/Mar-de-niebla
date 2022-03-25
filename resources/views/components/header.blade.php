<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div>
    <header class="p-4 bg-black">
        <div class="flex justify-between items-center">
            <img src="{{ asset('storage/logo.jpg') }}" class="h-11" alt="logo">

            @auth
                <div>
                    <button type="button" data-dropdown-toggle="dropdown"><i class="fa-solid fa-user fa-2x "
                            style="color: #F8981D"></i> </button>
                    <!-- Dropdown menu -->
                    <div class="hidden bg-[#F8981D] text-base z-50  " id="dropdown">
                        <ul class="py-1" aria-labelledby="dropdown">
                            @if (Route::is('dashboard'))
                                <li>
                                    <a href="{{ route('home') }}"
                                        class="text-sm hover:bg-gray-300 text-gray-700 block text-center px-4 py-2">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('misreservas') }}"
                                        class="text-sm hover:bg-gray-300  text-gray-700 block text-center px-4 py-2">Mis
                                        reservas</a>
                                </li>
                            @elseif (Route::is('home'))
                                <ul class="py-1" aria-labelledby="dropdown">
                                    <li>
                                        <a href="{{ route('dashboard') }}"
                                            class="text-sm hover:bg-gray-300  text-gray-700 block text-center px-4 py-2">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('misreservas') }}"
                                            class="text-sm hover:bg-gray-300  text-gray-700 block text-center px-4 py-2">Mis
                                            reservas</a>
                                    </li>
                                @elseif (Route::is('misreservas'))
                                    <li>
                                        <a href="{{ route('home') }}"
                                            class="text-sm hover:bg-gray-300 text-gray-700 block text-center px-4 py-2">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard') }}"
                                            class="text-sm hover:bg-gray-300  text-gray-700 block text-center px-4 py-2">Dashboard</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('home') }}"
                                            class="text-sm hover:bg-gray-300  text-gray-700 block text-center px-4 py-2">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard') }}"
                                            class="text-sm hover:bg-gray-300  text-gray-700 block text-center px-4 py-2">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('misreservas') }}"
                                            class="text-sm hover:bg-gray-300  text-gray-700 block text-center px-4 py-2">Mis
                                            reservas</a>
                                    </li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="text-sm hover:bg-gray-300 text-gray-700 w-full px-4 py-2">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
                @endauth
                {{ $slot }}
            </div>
    </header>
</div>
