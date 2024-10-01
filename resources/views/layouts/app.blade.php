<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="css/app.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="css/app.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="css/app.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Scripts -->

    <link href="{{ asset('vendors/https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
            <div class="" >

        <nav class="navbar navbar-expand-md shadow-sm fixed-top header bg-primary " id="header nav_principale" >
            <div class="container">
                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        @guest

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('register')}}">Creer un compte</a>
                            </li>


                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">Connexion</a>
                                </li>
                            @endif
                        @endguest




                    </ul>
                </div>
            </div>
        </nav>
    </div>

            @yield('content')

    </div>
</body>
</html>
