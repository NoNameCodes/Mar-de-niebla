
     <p class="mt-2">Compartir con:</p>
    <div class="mt-2  bg-opacity-60 
    px-4" style="border: 1px solid orange" >
        
           <div class="max-h-48 overflow-y-scroll p-4">
              @foreach ($users as $user)
                {{-- <option name="user_id" value="{{ $user->id }}">{{ $user->name }}</option> --}}
                @if(Auth::user()->id != $user->id)
                <div >
                  <input type="checkbox" checked id="cbox1" value="{{ $user->id }}" name="{{ $user->id }}">
                  <label for="{{ $user->id }}">{{ $user->name }}</label>
                 </div>
                @endif
            @endforeach 
           </div>
    </div>

