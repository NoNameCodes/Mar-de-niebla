@if (Auth::check() && Auth::user()->id == $resource->user_id)
    <button type="button" class="italic text-slate-400 text-left mt-2"
        onclick="location.href = '{{ route('history', $resource->id) }}'">Ver registro</button>
@endif
