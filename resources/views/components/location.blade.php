<div class="relative flex w-full">

    <select class="border border-orange-400 rounded-md text-gray-600 h-10 px-2 bg-white hover:border-gray-400 focus:outline-none appearance-none"
    name="location_id">
        <option disabled selected>--Localización--</option>
        @foreach ($location as $location)
            <option value="{{ $location->id }}">{{ $location->address }}</option>
        @endforeach
    </select>
</div>
