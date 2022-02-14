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
    <link rel="stylesheet" href="{{ asset('frontend/css/theme.css') }}">
    
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
                                    <li>
                                        <a class="daftar" href="{{ url('https://psb.arrisalahdu.co.id') }}" target="_blank" style="height: 40px;font-size: 20px;color: white;text-underline-position: all;border: 2px white solid;">
                                            Daftar
                                        </a>
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
    <section class="banner-section relative section-gap-full" id="banner-section">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 banner-left">
                    <h1>AR - RISALAH</h1>
                    <h2>DORMITORY</h2>
                    <br>
                    <p class="mt-1">Website resmi Asrama<b> 30</b> Ar risalah <br> Pondok Pesantren Darul 'Ulum Peterongan Jombang.</p>
                    <a class="video-btn primary-btn bold" href="{{ url('/tentang') }}">About More</a>
                </div>
                <div class="col-md-6 banner-right text-center">
                    <img class="img-fluid" src="{{ asset('frontend/img/logo/arrisalah.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="wave">
            <svg class="nectar-shape-divider" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
                preserveAspectRatio="none">
                <path d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path>
                <path d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z"></path>
                <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path>
            </svg>
        </div>
    </section>
    <!-- End banner section -->

    <!-- Start featured section -->
    <section class="featured-section">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Fasilitas</h2>
            </div>
            <div class="row align-item-center">
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="{{ asset('frontend/img/logo/quran.png') }}" alt="">
                    <h5>Pengajian Rutin</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="{{ asset('frontend/img/logo/dormitory.png') }}" alt="">
                    <h5>Gedung Nyaman</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="{{ asset('frontend/img/logo/food.png') }}" alt="">
                    <h5>Makanan Bergizi</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="{{ asset('frontend/img/logo/woman.png') }}" alt="">
                    <img class="img-fluid" src="{{ asset('frontend/img/logo/man.png') }}" alt="">
                    <h5>Pembina Berpengalaman</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- End featured section -->
        <!-- Start page-top-banner section -->
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <hr class="hr1"></hr>
                    <hr class="hr"></hr>
                    <h1 class="bolder">Ar Risalah Dormitory</h1>
                    <hr class="hr"></hr>
                    <hr class="hr1"></hr>
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
                    <img class="img-fluid" src="{{ asset('frontend/img/Gus-Bang.jpg')}}" alt="">
                </div>
                <div class="col-lg-5 col-md-5 about-right">
                    <h3>Sambutan Pengurus</h3>
                    <h1>Asrama <strong>30</strong> Ar Risalah</h1>
                    <p>
                        
                    </p>
                    <a class="primary-btn" href="{{ url('/tentang') }}">Know More</a>
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
    <!-- Start feature section -->
    <section class="feature-section section-gap-full" id="feature-section">
        <div class="container">
            <div class="row align-items-center feature-wrap">
                <div class="col-lg-4 header-left">
                    <h1>
                        Yuk ! <br>
                        Baca Artikel Karya Santri Ar Risalah
                    </h1>
                    <a class="primary-btn" href="{{ url('/berita') }}">Know More
                        <span class="ti-arrow-right"></span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row features-wrap">
                        @foreach( $berita as $b)
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-palette"></span>
                                <a href="{{ url('berita', $b) }}"><h3>{{ str_limit($b->judul,15) }}</h3></a><small>{{ $b->kategori->nama}}</small>
                                <h5> {{ $b->created_at->format('d, M Y') }}</h5>
                                 <p>{!! html_entity_decode(str_limit($b->konten, 20, ' ...Read More')) !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->

    <!-- Start stat section -->
    <section class="portfolio-section section-gap-full">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 header-left">
                    <h2>Galeri</h2>
                    <p>Yuk ! <br> Lihat  Galeri Santri Ar Risalah</p>
                    <a class="primary-btn" href="{{ url('/galeri') }}">Know More
                        <span class="ti-arrow-right"></span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($galeri as $g)
                        <div class="col-lg-4 cl">
                            <div class="single-portfolio">
                                <img class="img-fluid" src="{{ URL::to('/') }}/img/galeri_img/{{ $g->gambar }}" alt="" style="width: 600px;height: 200px;">
                                <div class="box-content">
                                    <a href="{{ url('galeri', $g) }}"><h5 class="title">{{ str_limit($g->judul, 10) }}</h5></a></h3></a><small>{{ $g->kategori->nama}}</small>
                                    <span class="post">{!! html_entity_decode(str_limit($g->keterangan, 5, ' ...')) !!}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End stat section -->

    <!-- Start team section -->
    <section class="team-section section-gap-full">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Ustad Dan Ustadzah</h2>
                <p class="text-center">Yang Profesional dan Kompeten</p>
            </div>
            <div class="row">
                <div class="team-carusel  owl-carousel" id="team-carusel">
                    @foreach($pengajar as $p)
                    <div class="single-team item">
                        <img class="img-fluid" src="{{ URL::to('/') }}/img/pengajar_img/{{ $p->foto }}" alt="">
                        <div class="team-content">
                            <a href="{{ url('pengajar', $p)}}"><h4>{!! html_entity_decode(str_limit($p->nama, 10,)) !!}</h4></a></h3></a><small>{{ $p->kategori->nama}}</small>
                            <ul>
                                <li>{{ str_limit($p->keterangan, 10,) }}</li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End team section -->

    <!-- Start testimonial section -->
    <section class="testimonial-section section-gap-full" id="testimonial-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 testimonial-left">
                    <h2>Kegiatan</h2>
                    <p>
                        Yuk ! <br>
                        Lihat Kegiatan Santri Ar Risalah
                    </p>
                    <a class="primary-btn" href="{{ url('/kegiatan') }}">Kegiatan
                        <span class="ti-arrow-right"></span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($kegiatan as $ke)
                        <div class="col-lg-4 cl">
                            <div class="single-portfolio">
                                <img class="img-fluid" src="{{ URL::to('/') }}/img/kegiatan_img/{{ $ke->gambar }}" alt="" style="width: 600px;height: 200px;">
                                <div class="box-content">
                                    <a href="{{ url('kegiatan', $ke) }}"><h3 class="title">{{ str_limit($ke->judul, 10) }}</h3></a>
                                    <h5> {{ $ke->created_at->format('d, M Y') }}</h5>
                                    <span class="post">{!! html_entity_decode(str_limit($ke->keterangan, 10, ' ...Read More')) !!}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section -->

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