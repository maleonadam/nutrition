
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

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
                            <a class="navbar-brand" href="#">
                                <h3 style="color: #fff;">Nutrition</h3>
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
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
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar area -->

        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselOne" data-slide-to="1"></li>
                        <li data-target="#carouselOne" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item bg_cover active" style="background-image: url(images/veges.webp)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Mycotoxin & Nutrition Analysis Platform</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="/products">GET STARTED</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item bg_cover" style="background-image: url(images/cow.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">High-end Analytical Testing & Analysis</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="/products">GET STARTED</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item bg_cover" style="background-image: url(images/we3.png)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Rapid Nutrition Testing for You!</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="/products">GET STARTED</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                        <i class="lni-arrow-left-circle"></i>
                    </a>

                    <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                        <i class="lni-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== NAVBAR PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <section id="about" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">About</h3>
                        <hr style="border-top: 2px solid #800000;">
                        <p class="text">Mycotoxin and Nutrition Analysis at BecA-ILRI Hub</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 mt-30 pb-10 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="100">
                    <h2 class="pb-2">Made In Africa, For You.</h2>
                    <p class="text">The Mycotoxin and Nutrition Analysis platform at the BecA-ILRI Hub offers analytical testing services and support in food safety, food nutrition and related agricultural applications. The platform is equipped with high-end analytical
                        testing equipment used in analysis of both inorganic and organic compounds of interest in bioscience applications.
                    </p>
                    <p class="text">The platform is open to researchers, regional research organizations or international research centers operating in Africa.</p>
                    <br>
                    <div class="carousel-btn rounded-buttons">
                        <a href="whyus.html" class="main-btn rounded-three">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 about-image text-center wow fadeInLeft mt-30 pb-10" data-wow-duration="1s" data-wow-offset="100">
                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Services</h3>
                        <hr style="border-top: 2px solid #800000;">
                        <p class="text">Below are some of the services you can request in the platform.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src="{{ asset('images/foodnutri.png') }}" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Food Safety</h4>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident, eos hic culpa consequatur alias.</p>
                            <a href="/services" class="read-more pt-2"><i class="fa fa-arrow-circle-right"></i> Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="about-icon">
                            <img src="{{ asset('images/foodnutrit.png') }}" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Food Nutrition</h4>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident, eos hic culpa consequatur alias.</p>
                            <a href="/services" class="read-more pt-2"><i class="fa fa-arrow-circle-right"></i> Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="about-icon">
                            <img src="{{ asset('images/otheranalysis.webp') }}" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Other Analysis</h4>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident, eos hic culpa consequatur alias.</p>
                            <a href="/services" class="read-more pt-2"><i class="fa fa-arrow-circle-right"></i> Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src="{{ asset('images/foodtraining.png') }}" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Training</h4>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident, eos hic culpa consequatur alias.</p>
                            <a href="/services" class="read-more pt-2"><i class="fa fa-arrow-circle-right"></i> Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center wow fadeInUp mt-20" data-wow-duration="1s" data-wow-delay="1.2s">
                    <ul class="carousel-btn rounded-buttons">
                        <li><a class="main-btn rounded-three" href="/products">Place Order</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== SERVICES PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Team</h3>
                        <hr style="border-top: 2px solid#800000;">
                        <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('images/team/img-2.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Fredrick Nganga</h3>
                            <span class="post">Analyst</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('images/team/img-1.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Joyce Musyoka</h3>
                            <span class="post">Analyst</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== TEAM PART ENDS ======-->

    <!--====== IMPACT PART START ======-->
    <section id="call-action" class="call-action-area">
        <div class="container">
            <div class="row">
                <div class="four col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="counter-box colored"> <i class="fa fa-thumbs-o-up"></i> <span class="counter">203</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="four col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="counter-box"> <i class="fa fa-tasks"></i> <span class="counter">500</span>
                        <p>Projects</p>
                    </div>
                </div>
                <div class="four col-md-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                    <div class="counter-box"> <i class="fa fa-shopping-cart"></i> <span class="counter">20</span>
                        <p>Available Products</p>
                    </div>
                </div>
                <div class="four col-md-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                    <div class="counter-box"> <i class="fa fa-group"></i> <span class="counter">10364</span>
                        <p>Farmers Impacted</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== IMPACT PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Clients</h3>
                        <hr style="border-top: 2px solid #800000;">
                        <p class="text">Here is what our clients say about us.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row testimonial-active">
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="{{ asset('images/client2.png') }}" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ab quas optio, quibusdam nulla et fuga dolores eaque possimus voluptatem harum dolore. Assumenda, esse non.&rdquo;</p>
                                    <h6 class="author-name">Isabela Moreira</h6>
                                    <span class="sub-title">CEO, GrayGrids</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="{{ asset('images/client4.png') }}" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ab quas optio, quibusdam nulla et fuga dolores eaque possimus voluptatem harum dolore. Assumenda, esse non.&rdquo;</p>
                                    <h6 class="author-name">Fiona</h6>
                                    <span class="sub-title">Lead Designer, UIdeck</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="{{ asset('images/client1.png') }}" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ab quas optio, quibusdam nulla et fuga dolores eaque possimus voluptatem harum dolore. Assumenda, esse non.&rdquo;</p>
                                    <h6 class="author-name">Elon Musk</h6>
                                    <span class="sub-title">CEO, SpaceX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="{{ asset('images/client3.jpg') }}" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ab quas optio, quibusdam nulla et fuga dolores eaque possimus voluptatem harum dolore. Assumenda, esse non."</p>
                                    <h6 class="author-name">Fajar Siddiq</h6>
                                    <span class="sub-title">CEO, MakerFlix</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== CLIENT LOGO PART START ======-->
    <section id="client" class="client-logo-area">
        <div class="container">
            <div class="row client-active">
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/africarice.jpg') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/beca.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/cgiar.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/cimmyt.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/cip.jpg') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/icarda.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/icraf-world.jpg') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/icrisat.jpg') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/iita.jpg') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="{{ asset('images/clients/ilri.jpg') }}" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== CLIENT LOGO PART ENDS ======-->

    <!--====== CONTACT PART START ======-->
    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Get in touch</h3>
                        <hr style="border-top: 2px solid #800000;">
                        <p class="text">Want to know more about what we do, or our services?</p>
                    </div>
                </div>
            </div>
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
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col">
                                @include('layouts.alerts')
                            </div>
                        </div>
                        <form id="contact-form" action="{{ route('submitinquiry') }}" method="POST">
                            {{csrf_field()}}

                            <div class="form-input mt-15">
                                <label>Name</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Name" name="name" required>
                                    <i class="lni-user"></i>
                                </div>
                            </div>
                            
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Email" name="email" required>
                                    <i class="lni-envelope"></i>
                                </div>
                            </div>
                            
                            <div class="form-input mt-15">
                                <label>Message</label>
                                <div class="input-items default">
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div>
                            
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" class="main-btn rounded-three">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== CONTACT PART ENDS ======-->

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
                                <a href="#">+254 724 225 517</a><br>
                                <a href="#">+254 724 225 517</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Crafted by <a style="color: #800000" target="_blank" rel="nofollow" href="https://maleonadam.netlify.app/">Adam</a>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
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
    <!-- <script src="{{ asset('js/wow.min.js') }}"></script> -->

    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Added js -->
    <script src="{{ asset('js/added.js') }}"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

</body>
</html>
