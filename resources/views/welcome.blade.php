<x-layout>

    <x-slot name="scripts">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <script src="{{ asset('js/welcome.js') }}" defer></script>
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    </x-slot>


    <div class="container-fullwidth">
        <p id="demo" class="text-responsive"></p>
    </div>

</x-layout>
