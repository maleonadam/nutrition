<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nutrition') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!--====== Bootstrap css ======-->
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> -->

    <!--====== Style css ======-->
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->

    <!--====== Added css ======-->
    <link rel="stylesheet" href="{{ asset('css/added.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Stylesheet -->
    @yield('stylesheet')
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Nutrition') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.index') }}">{{ __('Cart') }}
                                <span class="cart-count">
                                    @if(Cart::instance('default')->count() > 0)
                                    <span class="badge badge-pill badge-warning">
                                    {{ Cart::instance('default')->count() }}
                                    </span>
                                    @else
                                    <span class="badge badge-pill badge-warning">0</span>
                                    @endif
                                </span>
                            </a>
                        </li>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my-orders.index') }}">{{ __('My Orders') }}</a>
                            </li>
                            @if(Auth::user()->hasRole('staff') || Auth::user()->hasRole('admin'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminproducts') }}">{{ __('All Products') }}</a>
                                </li>
                            @endif
                            @if(Auth::user()->hasRole('staff') || Auth::user()->hasRole('admin'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('all-orders.index') }}">{{ __('All Orders') }}</a>
                                </li>
                            @endif
                            @if(Auth::user()->hasRole('admin'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/users') }}">{{ __('All Users') }}</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/useraccount') }}">
                                        {{ __('Profile') }}
                                    </a>
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

        <main class="py-5">
            @yield('content')
        </main>
    </div>

    <!-- Javascript -->
    @yield('javascript')

    <!--====== SCRIPTS ======-->

    <!--====== fontawesome js ======-->
    <!-- <script src="https://use.fontawesome.com/93acb635c8.js"></script> -->


    <!--====== jquery js ======-->
    <!-- <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script> -->

    <!--====== Bootstrap js ======-->
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/popper.min.js') }}"></script> -->

    <!--====== Slick js ======-->
    <!-- <script src="{{ asset('js/slick.min.js') }}"></script> -->

    <!--====== Isotope js ======-->
    <!-- <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script> -->

    <!--====== Images Loaded js ======-->
    <!-- <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script> -->

    <!--====== Magnific Popup js ======-->
    <!-- <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> -->

    <!--====== Scrolling js ======-->
    <!-- <script src="{{ asset('js/scrolling-nav.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jquery.easing.min.js') }}"></script> -->

    <!--====== wow js ======-->
    <!-- <script src="{{ asset('js/wow.min.js') }}"></script> -->

    <!--====== Main js ======-->
    <!-- <script src="{{ asset('js/main.js') }}"></script> -->

    <!-- Added js -->
    <!-- <script src="{{ asset('js/added.js') }}"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

</body>
</html>
