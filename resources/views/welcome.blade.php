@extends('components.layout')
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Archivo+Black&display=swap'>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}" defer></script>
    <style>
        body {
            background-image: url({{url('/images/xmas.jpg')}});
        }
    </style>


@section('content')
<p id="demo" class="demo"></p>


@stop
