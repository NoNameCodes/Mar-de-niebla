<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Resource Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Resource</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('resources.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('resources.update',$resource->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Resource Name:</strong>
<input type="text" name="name" value="{{ $resource->name }}" class="form-control" placeholder="Resource name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Resource Description:</strong>
<input type="text" name="description" class="form-control" placeholder="Resource Description" value="{{ $resource->description }}">
@error('description')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Resource Img:</strong>
    <input type="img" name="img" class="form-control" placeholder="Resource Email" value="{{ $resource->img }}">
    @error('img')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Resource Adress:</strong>
<input type="adress" name="adress" value="{{ $resource->location_id }}" class="form-control" placeholder="Resource Adress">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>