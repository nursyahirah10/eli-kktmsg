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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar is-dark">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="http://127.0.0.1:8000">
                        {{ config('app.name') }}
                    </a>
                    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div id="navbarExampleTransparentExample" class="navbar-menu">

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="field is-grouped">
                                @guest
                                <p class="control">
                                    <a href="{{ route('login') }}" class="bd-tw-button button">
                                    <span>
                                        Log Masuk
                                    </span>
                                    </a>
                                </p>
                                <p class="control">
                                    <a href="{{ route('register') }}" href class="button is-primary">
                                    <span>Daftar</span>
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
            </div>
        </nav>

        <main>
            @auth
            <div class="section">
                <div class="container">
                    <div class="columns">
                        <div class="column is-3">
                            <div class="image is-square mb-4">
                                <img src="{{ asset('storage/'.Auth::user()->profile_picture) }}" alt="">
                            </div>

                            <aside class="menu">
                                <p class="menu-label">
                                    Pelajar
                                </p>
                                <ul class="menu-list">
                                    <li><a href="{{ route('profile') }}" class="{{ add_class_by_route('profile') }}">Profil Pelajar</a></li>
                                </ul>
                                <p class="menu-label">
                                    Pendaftaran
                                </p>
                                <ul class="menu-list">
                                    <li><a href="{{ route('registration') }}" class="{{ add_class_by_route('registration') }}">Latihan Industri</a></li>
                                    <li><a href="{{ route('company') }}" class="{{ add_class_by_route('company') }}">Pemilihan Syarikat</a></li>
                                </ul>
                            </aside>
                        </div>

                        <div class="column is-9">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="section">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            @endauth
        </main>

        <div class="columns is-centered mt-4">
            <div class="column is-1">
                <img src="{{ asset('storage/mara-logo.png') }}" alt="LOGO" width="112" height="28">
            </div>
            <div class="column is-1">
                <img src="{{ asset('storage/kktmsg-logo.png') }}" alt="LOGO" width="112" height="28">
            </div>
        </div>
    </div>
</body>
</html>
