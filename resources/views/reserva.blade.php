<x-guest-layout>
    <x-header />

    <div class="flex justify-center">
        @if (Session::has('message'))
            <div class="lg:text-xl sm:text-md border-2 border-red-400 bg-red-200 rounded-md m-5 p-16">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="flex flex-row justify-center items-center">
        <x-resource-show :resource="$resource" />
    </div>

    <form action="{{ route('reserva.store', $resource->id) }}" class="footerdown " method="POST">
        @csrf
        <div class=" mb-6 flex flex-col items-center justify-center">
            <label for="date" class="text-gray-700 italic">Seleccione el día</label>
            <input type="date"
                class="form-control flex items-center text-gray-700   border-orange-500 rounded-xl  bg-[#FAF3F3] mb-6"
                id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required max="2099-12-31" />
            <input type="text" placeholder="Introduce tu nombre"
                class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3]  mb-6 " name="name" required>
            <input type="number" placeholder="Introduce tu teléfono"
                class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3] mb-6" name="phone" required
                min="0" pattern="^[0-9]+">
            <textarea class="text-gray-700 italic border-orange-500 rounded-xl bg-[#FAF3F3] py-12 mb-6" placeholder="Comentarios"
                name="coments"></textarea>
            <x-button-reserve />
        </div>
    </form>

    <x-footer />
</x-guest-layout>
