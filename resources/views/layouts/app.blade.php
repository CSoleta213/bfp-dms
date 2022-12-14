<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BFP DMS</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ url('img/bfp-apalit-logo.png') }}">

    <!-- Scripts -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        ::placeholder {
            color: rgba(37, 67, 140, 0.7);
        }

        a {
            color: rgba(34, 22, 57, 0.8);
        }

        a:hover {
            color: #800909;
        }

        button.login {
            color: #FFF;
            background-color: #1E4178;
            border: 2px solid #1E4178;
            border-radius: 4px;
            padding: 10px 40px 10px;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            cursor: pointer;
        }

        button.login:hover {
            color: #1E4178;
            background-color: #FFF;
        }
    </style>
</head>
<body>
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav me-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ms-auto"> -->
                        <!-- Authentication Links -->
                        <!-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> -->
                <!-- </div> -->
            <!-- </div>
        </nav> -->


            @yield('content')
</body>
</html>
