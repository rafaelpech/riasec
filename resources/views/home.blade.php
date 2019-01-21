<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Riasec</title>
        {{-- Icons materialize --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {{-- Materialize style --}}
        <link rel="stylesheet" href="{{ URL::asset('libs/materialize/css/materialize.css') }}">
        {{-- Riasec style --}}
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
    </head>
    <body>
        {{-- Materialize scripts --}}
        <script src="{{ URL::asset('libs/materialize/js/materialize.js') }}"></script>
        {{-- Riasec scripts --}}
        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>