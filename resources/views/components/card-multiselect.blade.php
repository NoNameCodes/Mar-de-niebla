<!-- component -->
<button class="bg-[#FFAF48] text-white rounded-md px-16 py-2 hover:bg[#FFAF48] transition "
    onclick="openModal('modal')">Compartir con</button>

<div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

        <!-- Modal header -->
        <div class="flex justify-between items-center bg-[#FFAF48] text-white text-xl rounded-t-md px-4 py-2">
            <h3>Compartir con</h3>
            <button onclick="closeModal()">x</button>
        </div>

        <!-- Modal body -->
        {{-- <div class="max-h-48 overflow-y-scroll p-4">
            <form action="/action_page.php">
                <div class="dropdown">
                    @foreach ($users as $user)
                        @if (Auth::user()->id != $user->id)
                            <input type="checkbox" name="{{ $user->id }}" value="{{ $user->id }}">
                            <label for="{{ $user->id }}"> {{ $user->name }}</label><br>
                        @endif
                    @endforeach
                </div>
            </form>
        </div> --}}
        <div class="max-h-48 overflow-y-scroll p-4">
            <form action="/action_page.php">
                <div class="dropdown">
                    <input type="checkbox" onClick="toggle(this)" /> Todos<br/>
                    @foreach ($users as $user)
                        @if (Auth::user()->id != $user->id)
                        <input type="checkbox" value="{{ $user->id }}" name="{{ $user->id }}" >{{ $user->name }} <br/>
                        @endif
                    @endforeach
                </div>
            </form>
        </div>


        <!-- Modal footer -->
        <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition"
                onclick="closeModal()">Close</button>
        </div>
    </div>
</div>

<script type="text/javascript">
    function openModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.remove('hidden')
    }

    function closeModal() {
        modal = document.getElementById('modal')
        modal.classList.add('hidden')
    }
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
