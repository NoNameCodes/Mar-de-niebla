<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ url('/form') }}"> Create Resource</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Resource Name</th>
                <th>Resource Description</th>
                <th>Resource Img</th>
                <th>Resource User_id</th>
                <th>Resource Location</th>
                <th width="280px"></th>
            </tr>
            @foreach ($resources as $resource)
                <tr>
                    <td>{{ $resource->name }}</td>
                    <td>{{ $resource->description }}</td>
                    <td>{{ $resource->img }}</td>
                    <td>{{ $resource->user_id }}</td>
                    <td>{{ $resource->location_id }}</td>
                    <td>
                        <form action="{{ route('resources.destroy', $resource->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('resources.edit', $resource->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $resources->links() !!}
</body>

</html>
