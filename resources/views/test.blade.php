<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>test</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <x-header />
    hola
    <img src="{{ asset('storage/fotoprueba.PNG') }}" alt="fotoprueba">
</body>
<x-footer />
</html>