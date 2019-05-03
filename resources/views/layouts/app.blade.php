<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fading -->
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script>
        window.sr = ScrollReveal({
            distance: '50px',
            duration: 1000,
            easing: 'ease',
            mobile: true,
            reset: true,
            viewFactor: 0.4,
        });
    </script>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color:#303030">
            <div class="container">
                <div calss='navbar-header'>
                    <img class="navbar-brand" src="{{ asset('img/logo.svg')}}">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="font-nav" > <b>About Me </b></li>
                        <li class="font-nav"> Portofolio</li>
                        <li class="font-nav"> Blog</li>
                        <li class="font-nav"> Ask Me</li>
                    </ul>
                </div>



            </div>
        </nav>

        <div>
            @yield('content')
        </div>
    </div>
</body>

<footer>
        <center><h6 style="font-family: 'Nato+Sans', sans-serif;">Made with passion by Luthfi Ferdian</h6><center>
</footer>

</html>
