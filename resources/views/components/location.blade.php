<div class="relative inline-flex">
  
       
    <select class="border border-orange-400 rounded-md text-gray-600 h-10 pl-5 pr-4 mt-2 mb-2 bg-white hover:border-gray-400 focus:outline-none appearance-none">
      <option disabled selected>--Localización--</option>
      @foreach ($location as $location)
      <option>{{$location->address}}</option>
     @endforeach
    </select>
   
  </div>