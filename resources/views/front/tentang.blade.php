<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/frontend/img/logo/ppdu.png') }}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>{{ $title }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">
    <!--// Css //-->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    
</head>

<body>

    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Start header section -->
    <header class="header-area" id="header-area">
        <div class="dope-nav-container breakpoint-off">
            <div class="container">
                <div class="row">
                    <!-- dope Menu -->
                    <nav class="dope-navbar justify-content-between" id="dopeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{ url('/') }}">
                            <img src="{{ asset('frontend/img/logo/arrisalah.png') }}" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="dope-menu">

                            <!-- close btn -->
                            <div class="dopecloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="dopenav">
                                <ul id="nav">
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/tentang') }}">Tentang</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/kegiatan') }}">Kegiatan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/galeri') }}">Galeri</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/berita') }}">Berita</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/pengajar') }}">Pengajar</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/fasilitas') }}">Fasilitas</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/kontak') }}">Kontak</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!---->

        <!-- Start page-top-banner section -->
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <h1>About Asrama</h1>
                    <hr class="hr"></hr>
                    <hr class="hr1"></hr>
                    <h3> ASRAMA 30 AR-RISALAH</h3>
                    <h4>Pondok Pesantern Darul 'Ulum Peterongan Jombang</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

    <!-- Start about section -->
    <section class="about-section section-gap-full relative" id="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 about-left">
                    <img class="img-fluid" src="{{ asset('frontend/img/about-header.jpg') }}" alt="">
                </div>
                <div class="col-lg-5 col-md-5 about-right">
                    <h1 style="font-size:50px;" class="mb-4">Sejarah</h1>
                    <h2 class="mb-1">Asrama <strong>30</strong> Ar-Risalah</h2>
                    <h4>Pondok Pesantern Darul 'Ulum Peterongan Jombang</h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
        <div class="floating-shapes">
            <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-1.png') }}" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-2.png') }}" alt="">
            </span>
            <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-3.png') }}" alt="">
            </span>
            <span data-parallax='{"x": -20, "y": 180}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-4.png') }}" alt="">
            </span>
            <span data-parallax='{"x": 300, "y": 70}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-5.png') }}" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-6.png') }}" alt="">
            </span>
            <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-7.png') }}" alt="">
            </span>
            <span data-parallax='{"x": 60, "y": -100}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-9.png') }}" alt="">
            </span>
            <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
                <img src="{{ asset('frontend/img/shape/fl-shape-10.png') }}" alt="">
            </span>
        </div>
    </section>
    <!-- End about section -->

   <!-- Start footer section -->
    <footer class="footer-section section-gap-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 footer-left">
                    <p class="bolder mb-2"><h4  style="color: white;">Supported By :</h4></p>
                    <a href="{{ url('https://www.instagram.com/dikomo.media/')}}" target="_blank">
                        <img src="{{ asset('frontend/img/logo/dikomo.jpg') }}" class="img-thumbnail" alt="" width="50" height="30"> 
                        <font class="bolder" style="color: white;">Dikomo Media</font>
                    </a>
                    <a href="{{ url('https://www.instagram.com/rismaker/')}}" target="_blank">
                        <img src="{{ asset('frontend/img/logo/rismaker.jpg') }}" class="img-thumbnail" alt="" width="50" height="30"> 
                        <font class="bolder" style="color: white;">Rismaker</font>
                    </a>
                </div>
                <div class="col-lg-7">
                    <ul id="social">
                        <li>
                            <a target="_blank" href="{{ url('/')}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ url('/')}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ url('/')}}">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ url('https://www.instagram.com/arrisalah.du/')}}">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-menu">
                        <li>
                            <a href="{{ url('https://id.wikipedia.org/wiki/Pondok_Pesantren_Darul_%27Ulum_(Rejoso)') }}" target="_blank">PONDOK PESANTREN DARUL 'ULUM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->


    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>
<!---->
    <script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('frontend/js/dopeNav.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>