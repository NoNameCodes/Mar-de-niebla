{{-- <div class="inline-block w-fit mr-auto ml-auto pt-3 pr-4 pb-3 pl-4 container sm:px-6">
    <select id="select-role" name="organisms[]" multiple placeholder="Compartir con" autocomplete="off" class="block w-full rounded-sm cursor-pointer focus:outline-none" multiple>
    
        @foreach ($users as $user)
        <option name= "user_id" value="{{$user->id}}">{{$user->name}}</option>  
        @endforeach 

    </select>
</div> --}}



    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css"rel="stylesheet" />

    <div class="w-full">
     
      <div class="relative flex w-full" >
        <select id="select-role" name="roles[]"
          placeholder="Compartir con..." autocomplete="off" class="block w-full rounded-sm cursor-pointer focus:outline-none" style="border 1px solid #F8981D" multiple >
        @foreach ($users as $user)
        <option name= "user_id" value="{{$user->id}}">{{$user->name}}</option>  
        @endforeach 
        </select>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
      new TomSelect('#select-role', {
        maxItems: 500,
      });
    </script>
