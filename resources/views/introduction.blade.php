@extends('components.layout')

<link href="{{ asset('css/introduction.css') }}" rel="stylesheet">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">


@section('content')

    <div class="intro_content">

        <p class="first">Greetings,<span class = "one">1</span>
            <br/>
            we are looking for highly intelligent
            <br/>
            individuals to free , Santa Claus!
            <br/>
            There is a message hidden in this image.
            <br/>
            Reveal it, and it will lead you on the road
            <br/>
            to finding him. Save Christmas!
            <br/>
            Good luck! <span class = "two">2</span></p>

        <p class="second">3301</p>
    </div>

    <img class="moth" src="images/moth.png" alt="moth" width="300px" height="300px">


@stop
