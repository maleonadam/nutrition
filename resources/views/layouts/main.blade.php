<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Nutrition - Platform</title>

    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> -->

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--====== Added css ======-->
    <link rel="stylesheet" href="{{ asset('css/added.css') }}">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->

</head>

<body>
    <!--====== PRELOADER ======-->
    @include('layouts.preloader')

    <!--====== NAVBAR ======-->
    @include('layouts.nav')

    <!--====== SIDEBAR ======-->
    @include('layouts.sidebar')

    <!--====== MAIN CONTENT ======-->
    @yield('content')

    <!--====== FOOTER ======-->
    @include('layouts.footer')

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>


    <!--====== SCRIPTS ======-->
    
    <!--====== fontawesome js ======-->
    <script src="https://use.fontawesome.com/93acb635c8.js"></script>


    <!--====== jquery js ======-->
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Scrolling js ======-->
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Added js -->
    <script src="{{ asset('js/added.js') }}"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

</body>
</html>