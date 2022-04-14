<strong class="mt-2">Compartir con:</strong>
<div class="mt-2 bg-opacity-60 px-4 border border-orange-400 border-1 rounded mb-2">
    <div class="max-h-48 overflow-y-scroll p-1">
        @foreach ($users as $user)
            @if (Auth::user()->id != $user->id)
                <div>
                    <input type="checkbox" checked id="cbox1" value="{{ $user->id }}" name="{{ $user->id }}">
                    <label for="{{ $user->id }}">{{ $user->name }}</label>
                </div>
            @endif
        @endforeach
    </div>
</div>
