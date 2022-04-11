<script src="https://cdn.tailwindcss.com"></script>

<div class="w-full">

    <div class="relative flex">
        <input id="select-role"  >
            @foreach ($users as $user)
                {{-- <option name="user_id" value="{{ $user->id }}">{{ $user->name }}</option> --}}
                <input type="checkbox" checked id="cbox1" value="{{ $user->id }}" name="{{ $user->id }}">
                <label for="{{ $user->id }}">{{ $user->name }}</label>
            @endforeach 
            
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

