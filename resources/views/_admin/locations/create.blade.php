@extends('layouts.app', ['title' => 'Añadir Localización | Barrio Oeste'])
@section('main')
    <div>
        <div class="flex justify-center">
            @if (Session::has('message'))
                <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="flex justify-center">
            <form action="{{ route('location.store') }}" method="POST">
                @csrf
                <h1 class="text-orange-400 mx-6 mt-20 mb-6 text-3xl">Añadir localizaciones</h1>
                <div>
                    <input type="text" placeholder="Introduce tu dirección"
                        class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3]  mb-6 " name="address"
                        required>
                    <button id="btnReserve"
                        class="bg-[#F8981D] hover:bg-[#ffba25] text-white font-bold py-2 px-8 shadow-xl rounded mb-2"
                        type="submit">
                        Añadir
                    </button>
                </div>

                <a href="{{ route('location.vista') }}"
                    class="bg-[#F8981D] hover:bg-[#ffba25] text-white font-bold py-2 px-8 shadow-xl rounded mb-2 mt-8 flex justify-center">Lista
                    de localizaciones</a>
            </form>
        </div>
    </div>
@endsection
