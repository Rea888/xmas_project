@extends('components.layout')

<link href="{{ asset('css/introduction.css') }}" rel="stylesheet">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
@section('content')

    <div>

        <p id="first">Greetings,1
            <br/>
            we are looking for highly intelligent
            <br/>
            individuals to free Santa Claus!
            <br/>
            There is a message hidden in this image.
            <br/>
            Reveal it, and it will lead you on the road
            <br/>
            to finding him. Save Christmas!
            <br/>
            Good luck! 2</p>
    </div>

    <div>
        <p id="second">3301</p>
    </div>

    <a href= 'second'><img id="position" src="/images/moth.png" alt="moth" width="300" height="300"></a>


@stop
