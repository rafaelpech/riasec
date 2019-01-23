<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Riasec - @yield('title')</title>
        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ URL::asset('img/riasec/Logo.png') }}" type="image/png">
        {{-- Icons materialize --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {{-- Materialize style --}}
        <link rel="stylesheet" href="{{ URL::asset('libs/materialize/css/materialize.css') }}">
        {{-- Riasec style --}}
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
    
        <nav>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </nav>

        <ul id="slide-out" class="sidenav">
            <li>
                <a href="#!">
                    <img src="{{ URL::asset('img/riasec/Logo.png') }}" class="circle" alt="RIASEC">
                </a>
            </li>
            <li>
                <a href="#!"><i class="material-icons">home</i>Inicio</a>
            </li>
            <li>
                <a href="#!"><i class="material-icons">info</i>Acerca de</a>
            </li>
            <li>
                <a href="#!"><i class="material-icons">person</i>Contacto</a>
            </li>
        </ul>

        <header>
            
        </header>
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>
        
        {{-- Materialize scripts --}}
        <script src="{{ URL::asset('libs/materialize/js/materialize.js') }}"></script>
        {{-- Riasec scripts --}}
        <script src="{{ URL::asset('js/app.js') }}"></script>
        {{-- Google  --}}
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UX-XXXXXXXX-X', 'auto');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
        </script>
    </body>
</html>