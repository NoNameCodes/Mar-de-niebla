<div>
    @foreach ($resources as $resource)
        <x-card :resources = "$resource" />
    @endforeach
</div>
