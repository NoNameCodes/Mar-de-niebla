<x-guest-layout>
    <x-header />

    <div class="flex justify-center text-red-700 ">
        @if (Session::has('message'))
            {{ session('message') }}
        @endif
    </div>

    <div class="flex flex-col justify-center items-center">
        <x-resource-show :resource="$resource" />
    </div>

    <form action="{{ route('reserva.store', $resource->id) }}" class="footerdown " method="POST">
        @csrf
        <div class=" mb-6 flex flex-col items-center justify-center  ">
            <label for="date" class="text-gray-700 italic">Seleccione el día</label>
            <input type="date"
                class="form-control flex items-center text-gray-700   border-orange-500 rounded-xl  bg-[#FAF3F3] mb-6"
                id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required />
            <input type="text" placeholder="Introduce tu nombre"
                class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3]  mb-6 " name="name" required>
            <input type="number" placeholder="Introduce tu teléfono"
                class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3] mb-6" name="phone" required>
            <textarea class="text-gray-700 italic border-orange-500 rounded-xl bg-[#FAF3F3] py-12 mb-6" placeholder="Comentarios"
                name="coments"></textarea>
            <button id="btnReserve" class="bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2"
                type="submit">
                Reservar
            </button>
        </div>
    </form>

    <x-footer />
</x-guest-layout>
