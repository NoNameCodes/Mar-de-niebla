@if (Route::currentRouteName() == 'history')
    <button id="btnAdd"
        class="text-lg m-12 px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
        onclick="location.href='{{ url('/home') }}'">Volver
    </button>
@endif

@if (Route::currentRouteName() == 'misreservas')
    <button id="btnAdd"
        class="text-lg m-12 px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
        onclick="location.href='{{ url('/home') }}'">Recursos disponibles
    </button>
@endif
