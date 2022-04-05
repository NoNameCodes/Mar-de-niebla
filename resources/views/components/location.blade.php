  <div class="relative flex w-full" >
  
    <select class="border border-orange-400 rounded-md text-gray-600 h-11 px-8 bg-white hover:border-gray-400 focus:outline-none appearance-none" name=location>
      <option disabled selected>--Localización--</option>
      @foreach ($location as $location)
      <option value="{{$location->id}}">{{$location->address}}</option>
     @endforeach
    </select>
</div>

