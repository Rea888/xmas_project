@extends('components.layout')

<link href="{{ asset('css/introduction.css') }}" rel="stylesheet">
<style>
    body {
        background-image: url({{url('/images/intro.jpg')}});
        font-family: "PW", serif;
    }
    @font-face {
        font-family: "PW";
        src: local("fonts/CandyTime.ttf"),
        url("fonts/PW.ttf") format("truetype");
    }
</style>
@section('content')

    <strong><div id="p">

    <p>Greetings, we are looking for highly intelligent </p>
    <p>individuals to free Santa Claus!</p>
    <p>There is a message hidden in this image.</p>
    <p>Reveal it, and it will lead you on the road to finding him.</p>
    <p>Save Christmas!</p>
    <p>Good luck!</p>
    <p>3301</p>
    </div>
    </strong>

@stop
