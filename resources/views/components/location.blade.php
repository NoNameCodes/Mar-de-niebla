<div class="relative inline-flex">
  
    <select class="border border-orange-400 rounded-md text-gray-600 h-11 pl-5 pr-4 mt-2 mb-2 bg-white hover:border-gray-400 focus:outline-none appearance-none" name=location>
      <option disabled selected>--Localización--</option>
      @foreach ($location as $location)
      <option value="{{$location->id}}">{{$location->address}}</option>
     @endforeach
    </select>
</div>
