<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ApiGroza') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('img/bee.png')}}">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light color-primary-bgg shadow-sm navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ApiGroza
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about_us') }}">Despre noi </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('categorii')}}">Categorii </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produse
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{route('produse_apicole')}}">
                                Produse apicole
                                 </a>
                                 <a class="dropdown-item" href="{{route('produse_cosmetice')}}">
                                Produse cosmetice
                                 </a>
                                 <a class="dropdown-item" href="{{route('produse_echipamente')}}">
                                Echipamente
                                 </a>
                                 <a class="dropdown-item" href="{{route('produse_matci')}}">
                                Matci
                                 </a>
                                 <a class="dropdown-item" href="{{route('produse_familii')}}">
                                Familii
                                 </a>
                            </div>
                        </li>
                        <?php if (Auth::user()): ?>
                        <!-- Daca email e grozabogdan sau email contine ADMIN -->
                        <?php if ((Auth::user()->email == "grozabogdan@gmail.com") || (strpos(Auth::user()->email, 'admin'))): ?> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produse - ADMIN
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('products.index') }}">
                                    Lista produse
                                </a>
                                <a class="dropdown-item" href="{{ route('products.create') }}">
                                    Adaugare produs nou
                                </a>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <!-- Shopping Cart -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('shopping_cart')}}">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cos 
                                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                                </a>
                            </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="fa fa-user" aria-hidden="true"></i> &nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap JS and JQUERY already loaded -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
