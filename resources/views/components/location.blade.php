<div class="relative flex w-full">

    <select class="border border-orange-400 rounded-md text-gray-600 text-left h-10 px-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
    name="location_id">
        <option disabled selected>--Localización--</option>
        @foreach ($location as $location)
            <option value="{{ $location->id }}">{{ $location->address }}</option>
        @endforeach
    </select>
</div>
