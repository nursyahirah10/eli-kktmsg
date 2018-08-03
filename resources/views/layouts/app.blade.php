<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar is-transparent">
            <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="{{ asset('storage/mara-logo.png') }}" alt="LOGO" width="112" height="28">
                </a>
                <a class="navbar-item" href="https://bulma.io">
                    <img src="{{ asset('storage/kktmsg-logo.png') }}" alt="LOGO" width="112" height="28">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
                </div>
            </div>

            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                    @auth
                    <a class="navbar-item" href="https://bulma.io/">
                        Profile Pelajar
                    </a>
                    <a class="navbar-item" href="https://bulma.io/">
                        Pendaftaran LI
                    </a>
                    <a class="navbar-item" href="https://bulma.io/">
                        Pemilihan Syarikat
                    </a>
                    <a class="navbar-item" href="https://bulma.io/">
                        Status Permohonan
                    </a>
                    @endauth
                </div>
                </div>

                <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                    @guest
                    <p class="control">
                        <a href="{{ route('login') }}" class="bd-tw-button button">
                        <span>
                            Login
                        </span>
                        </a>
                    </p>
                    <p class="control">
                        <a href="{{ route('register') }}" href class="button is-primary">
                        <span>Register</span>
                        </a>
                    </p>
                    @else
                    <p class="control">
                        <a href="{{ route('logout') }}" class="bd-tw-button button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span>
                            Logout
                        </span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </p>
                    @endguest
                    </div>
                </div>
                </div>
            </div>
            </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
