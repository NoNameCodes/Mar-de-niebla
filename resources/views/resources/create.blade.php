<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Resource Form </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Añadir recurso</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('resources.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('resources.store') }}" method="POST">
@csrf

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Recurso:</strong>
            <input type="text" name="name" class="form-control" placeholder="Nombre del recurso">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripción:</strong>
            <input type="text" name="description" class="form-control" placeholder="Descripción del recurso">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imagen:</strong>
            <input type="img" name="img" class="form-control" placeholder="Imagen del recurso">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>user_id:</strong>
            <input type="" name="user_id" class="form-control" placeholder="Resource Address">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Resource Address:</strong>
            <input type="   " name="location_id" class="form-control" placeholder="Resource Address">
        </div>
    </div>

    <button type="submit" class="btn btn-primary ml-3">Añadir</button>
</div>
</form>
</body>
</html>