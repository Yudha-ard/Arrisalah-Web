<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/frontend/img/logo/ppdu.png') }}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>{{$title}}</title>

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
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5" style="background-position: 0px 150px;">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <h1>Pengajar Asrama</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

    <!-- Start portfolio section -->
    <div class="col-lg-12 mt-5 text-center">
        <h1>Pengajar Asrama</h1>
        <hr class="hr1"></hr>
    </div>

    <section class="portfolio-section section-gap-full mb-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                    	 @foreach($pengajar as $pe)
                        <div class="col-lg-6 cl">
                            <div class="single-portfolio">
                                <img class="img-fluid" src="{{ URL::to('/') }}/img/pengajar_img/{{ $pe->foto }}" alt="">
                                <div class="box-content">
                                    <a href="{{ url('pengajar', $pe)}}">
                                        <h5 class="title">{{ $pe->nama }}</h5>
                                    </a>
                                    <span class="post">{!! html_entity_decode(str_limit($pe->keterangan, 10,'...Read More')) !!}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>    
                </div>        
            </div>
        {{ $pengajar->links() }}
        </div>
    </section>
    <!-- End portfolio section -->

    <!-- Start footer section -->
    <footer class="footer-section section-gap-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 footer-left">
                    <p class="bolder mb-2"><h4  style="color: white;">Supported By :</h4></p>
                    <a href="{{ url('https://www.instagram.com/dikomo.learning/')}}" target="_blank">
                        <img src="{{ asset('frontend/img/logo/dikomo.jpg') }}" class="img-thumbnail" alt="" width="50" height="30"> 
                        <font class="bolder" style="color: white;">Dikomo Learning</font>
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