<div class="relative flex w-full">
    <select
        class="border border-orange-400 rounded-md text-gray-600 h-10 px-2 bg-white hover:border-gray-400 focus:outline-none appearance-none w-full"
        name="location_id">
        <option disabled selected>--Localización--</option>
        @foreach ($location as $location)
            @if ($resource->location_id == $location->id)
                <option value="{{ $location->id }}" selected>{{ $location->address }}</option>
            @else
                <option value="{{ $location->id }}">{{ $location->address }}</option>
            @endif
        @endforeach
    </select>
</div>
