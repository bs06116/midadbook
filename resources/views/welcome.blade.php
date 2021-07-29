<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/fonts/stylesheet.css')}}">
        {{-- <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        @livewireStyles
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: Source Sans Pro, sans-serif;
            }


        </style>
    </head>
    <body>
        @livewire('showposts')
        @livewireScripts
        <script type="text/javascript">
            window.onscroll = function(ev) {
                console.info(ev)
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                    window.livewire.emit('load-more');
                }
            };
       </script>
    </body>
</html>
