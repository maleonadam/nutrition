
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
    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->
    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <h3 style="color: #fff;">Nutrition</h3>
                                <!-- <img src="#" alt="Logo"> -->
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#portfolio">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">Clients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contacts</a>
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

                            <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div>
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </section>
    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SIDEBAR PART START ======-->
    <div class="sidebar-right">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-menu">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <!-- menu -->
            <!-- sidebar social -->
        </div>
        <!-- content -->
    </div>
    <div class="overlay-right"></div>
    <!--====== SIDEBAR PART ENDS ======-->
    
    <!--====== services PART START ======-->
    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu pt-30 text-center">
                        <ul>
                            <li data-filter="*" class="active">All</li>
                            <li data-filter=".branding-3">Food Safety</li>
                            <li data-filter=".marketing-3">Food Nutrition</li>
                            <li data-filter=".planning-3">Other Analysis</li>
                            <li data-filter=".research-3">Training</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row grid">
                <div class="col-12 branding-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Food Safety</a></h4>
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Analysis of aflatoxins (B1, B2, G1, G2) in food and feedstuff, aflatoxin M1 in ilk through ultra-perfomance liuid chromatography fluorescence detection</li>
                                <li><i class="lni-check-mark-circle"></i> Analysis of multi mycotoxin using UPLC-MS/MS.
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Cross validation of rapid aflatoxin detection kits with UPLC-FLD across different matrices
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Multi-residue pesticide analysis</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 marketing-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Food Nutrition</a></h4>
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Analysis of inorganic elemens (Fe, Zn, Mg, Co, Ca,K, Na, P Mn) in various plant matrices.
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Profiling of isoflavones in soy based food and supplements through UPLC-PDA.</li>
                                <li><i class="lni-check-mark-circle"></i> Assesment of essential amino acids in food and feedstuff.
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Profiling of fatty acid methyl esters by gas chromatography mass spectometry (GC-MS).
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Profiling of volatile organic compounds using head space solid phase micro extraction gas chromatography mass spectometry (HS-SPME-GCMS).
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Determination of nutritional and antinutritional phytochemicals in food and feed e.g phenolics, flavanoids, anti-oxidant activity, tannins, oxalates,phytates etc..</li>
                                not fat (SnF), freezing point depression (FPD), total acidity, density, free fatty acids (FFA), citric acids, casein, urea, sucrose, glucose, fructose, galactose.</li>
                                <li><i class="lni-check-mark-circle"></i> Determination of proximates composition in raw and processed food and feed products.
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Determination of various proximate in raw and processed milk (fat, protein, lactose, total solids, solids).</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Other Analysis</a></h4>
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Untargeted GC-MS and UPLC-MS metabolite profiling.
                                </li>
                                <li><i class="lni-check-mark-circle"></i> Targeted UPLC-MS/MS profiling of strigolactones.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 research-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Training</a></h4>
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Training on demand</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== services PART ENDS ======-->

    <!--====== CONTACT TWO PART START ======-->
    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Get in touch</h3>
                        <hr style="border-top: 2px solid #800000;">
                        <p class="text">Want to know more about what we do, or our services?</p>
                    </div>
                    <!-- section title -->
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <h3 class="contact-title">The Nutrition Platform</h3>
                        <p class="text">Analytical testing Services and support in food safety, food nutrition and related agricultural applications.</p>
                        <div class="contact-info">
                            <h4>About ILRI</h4>
                            <p>Learn more about the BecA-ILRI Hub.</p>
                            <a href="https://www.ilri.org/" target="_blank"><img src="{{ asset('images/clients/ilri5.png') }}"></a>
                        </div>
                    </div>
                    <!-- contact two -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="form-input mt-15">
                                <label>Name</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Name" name="name">
                                    <i class="lni-user"></i>
                                </div>
                            </div>
                            <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Email" name="email">
                                    <i class="lni-envelope"></i>
                                </div>
                            </div>
                            <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Message</label>
                                <div class="input-items default">
                                    <textarea placeholder="Message" name="message"></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div>
                            <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" class="main-btn rounded-three">Submit</button>
                            </div>
                            <!-- form input -->
                        </form>
                    </div>
                    <!-- contact form -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== CONTACT TWO PART ENDS ======-->

    <!--====== FOOTER ======-->
    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row mt-60">
                    <div class="col-md-4 col-sm-6">
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Address</h4>
                                <p>P.O Box 30709-00100, <br> Nairobi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Email</h4>
                                <a href="#">mycnutplatform@cgiar.org</a><br>
                                <a href="#">mycnutplatform@cgiar.org</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Phone Number</h4>
                                <a href="#">+254 20 422 3384</a><br>
                                <a href="#">+254 20 422 3384</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer widget -->

        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Crafted by <a style="color: #800000" target="_blank" rel="nofollow" href="https://maleonadam.netlify.app/">Adam</a> and UI Elements from <a style="color: #800000" target="_blank" rel="nofollow" href="https://ayroui.com">Ayro
                                    UI</a></p>
                        </div>
                        <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul>
                        <!-- social -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer copyright -->
    </footer>
    <!--====== FOOTER  ======-->

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