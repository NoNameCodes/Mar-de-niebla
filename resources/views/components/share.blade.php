<strong class="mt-2">Compartir con:</strong>
<div class="mt-2 bg-opacity-60 px-4 border border-orange-400 border-1 rounded mb-2">
    <div class="max-h-48 overflow-y-scroll p-1">
        <input type="checkbox" onClick="toggle(this)" /> Todos<br />

        @foreach ($users as $user)
            @if (Auth::user()->id != $user->id)
                <div>
                    <input type="checkbox" value="{{ $user->id }}"
                        name="{{ $user->id }}">{{ $user->name }}<br />
                </div>
            @endif
        @endforeach
    </div>
</div>
<script>
    function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
        }
    }
</script>
