<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} {{ date_default_timezone_set('Asia/Jakarta') }}" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/frontend/img/logo/ppdu.png') }}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>{{$kegiatans->judul}} | {{$title}}</title>

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
                    <h1>Kegiatan Asrama</h1>
                </br>
                    <h2>{{ $kegiatans->judul }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

    <!-- Start blog-lists section -->
    <section class="blog-lists-section section-gap-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="post-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="{{ URL::to('/') }}/img/kegiatan_img/{{ $kegiatans->gambar }}" alt="">
                        </div>
                        <div class="post-details">
                        	<ul class="tags">
                                <li>{{ $kegiatans->created_at->format('d, M Y')  }}</li>
                            </ul>
                            <h1>{{ $kegiatans->judul }}</h1>
                            <p>{!! html_entity_decode($kegiatans->keterangan) !!}</p>
                        </br>
                        <a class="primary-btn" href="{{ url('/kegiatan') }}">Kegiatan
                                <span class="ti-arrow-right"></span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
                        <div class="single-widget search-widget">
                            <h3 class="widget-title text-center">Jam</h3>
                            <div class="single-widget">
                                <h2 class="text-center">{{ date('H:i:s A') }}</h2>
                            </div>
                        </div>
                        <div class="single-widget social-widget">
                            <h4 class="widget-title">Social Links</h4>
                            <ul>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog-lists section -->
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

    <!-- JS -->
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
@include('sweet::alert') 
</body>

</html>