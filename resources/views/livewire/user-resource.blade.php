<div>
    @foreach ($resources as $resource)
        <x-card :resource="$resource" />
    @endforeach
</div>
