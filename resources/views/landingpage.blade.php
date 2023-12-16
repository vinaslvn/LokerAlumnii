<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sasoft - Software Landing Page">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="/assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.css" rel="stylesheet" />
    <link href="/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet" />

</head>
<body>
    <div class="se-pre-con"></div>
    <header id="home">
        <nav class="navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav">
            <div class="container">
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="loginalumni">Login</a></li>
                    </ul>
                </div>        
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="/assets/img/logo bkk.jfif" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        <li>
                            <a class="smooth-menu" href="#features">Tentang Kami</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#about1">Perusahaan</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#testimoni">Testimoni</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#blog">Postingan</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#contact">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area inc-shape content-less bg-gradient text-default">
        <div class="container">
            <div class="double-items">
                <div class="row align-center">

                    <div class="col-lg-6 info shape">
                        {{-- <h4 class="wow fadeInLeft" data-wow-delay="300ms">Best platform.</h4> --}}
                        <h2 class="wow fadeInRight" data-wow-delay="500ms">Selamat Datang<br>di BKK SMK YPC Tasikmalaya</h2>
                        <div class="button wow fadeInUp" data-wow-delay="700ms">
                            <a class="btn btn-md btn-gradient" href="#">Get Started</a>
                            <a href="/https://www.youtube.com/@smkypctasikmalayaofficial8673" class="popup-youtube video-btn"><i class="fas fa-play"></i>Watch Video</a>
                        </div>
                    </div>

                     <div class="col-lg-5 offset-lg-1 width-160 thumb wow fadeInRight ">
                        <img src="/assets/img/ypcc.jpg" alt="Thumb">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features
    ============================================= -->
    <div id="features" class="features-area text-center default-padding-top">
        <div class="container">
            @foreach ($tentangkami as $key => $item)

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="area-title">Tentang Kami</h2>
                        <div class="devider"></div>
                        <p>
                            {{$item->tentangkami}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <img class="wow fadeInLeft" data-wow-delay="300ms" src="assets/img/download.png" alt="Thumb">
            </div>
    </div>
    <!-- End Our Features -->

    <!-- Star About Area
    ============================================= -->
    <div id="about1" class="about-area inc-left-border default-padding-top overflow-hidden">
        {{-- <div class="container">
            <div class="about-content">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumbs">
                            <img class="wow fadeInLeft" data-wow-delay="300ms" src="/assets/img/illustration/11.png" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 info wow fadeInRight">
                        <h4></h4>
                        <h2>Perusahaan</h2>
                        <p>
                            BKK membantu menyediakan kesempatan kerja bagi lulusan SMK dengan menghubungkan mereka dengan perusahaan yang membutuhkan tenaga kerja dengan kualifikasi dan skills yang dimiliki oleh lulusan SMK. Dengan demikian, 
                            lulusan SMK dapat segera terjun ke dunia kerja tanpa harus menganggur terlalu lama.
                        </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- End About Area -->

    <!-- Star Clients Area
    ============================================= -->
    <div class="clients-area left-border default-padding bg-gray shape-less">
        {{-- <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 left-info">
                    <ul class="achivement">
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="10000" data-speed="5000">10000</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Trusted Users</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Positive Rating</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 right-info">
                    <h2>Trusted client by over <br>10000+ of the world’s</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-carousel owl-carousel owl-theme">
                        <img src="/assets/img/nabati.jpg" alt="Partner">
                        <img src="/assets/img/strider.png" alt="Partner">
                        <img src="/assets/img/ymm.jpg" alt="Partner">
                        <img src="/assets/img/daihatsu.jpg" alt="Partner">
                        <img src="/assets/img/nabati.jpg" alt="Partner">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Perusahaan</h2>
                        <div class="devider"></div>
                        <p>
                            BKK membantu menyediakan kesempatan kerja bagi lulusan SMK dengan menghubungkan mereka dengan perusahaan yang membutuhkan tenaga kerja dengan kualifikasi dan skills yang dimiliki oleh lulusan SMK. Dengan demikian, 
                            lulusan SMK dapat segera terjun ke dunia kerja tanpa harus menganggur terlalu lama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="center-tabs">
                <ul id="tabs" class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#" data-target="#tab1" data-toggle="tab" class="active nav-link">Otomotif</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-target="#tab2" data-toggle="tab" class="nav-link">FMCG</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-target="#tab3" data-toggle="tab" class="nav-link">Motor</a>
                    </li>
                </ul>
                <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                    <div id="tab1" class="tab-pane fade active show">
                        <div class="row align-center">
                            <div class="col-lg-7 col-md-12 thumb">
                                <img src="/assets/img/daihatsu.jpg" width="500" alt="Thumb">
                            </div>
                            <div class="col-lg-5 col-md-12 info">
                                <h3><strong>01</strong> Daihatsu</h3>
                                <p>
                                    Daihatsu adalah sebuah produsen mobil asal Jepang dan merupakan salah satu produsen mesin pembakaran dalam tertua di Jepang yang masih eksis hingga saat ini. PT Astra Daihatsu Motor (ADM) adalah perusahaan otomotif dengan kapasitas produksi terbesar dan memiliki fasilitas Research and Development Center pertama dan terlengkap di Indonesia. 
                                    Daihatsu menawarkan beragam jenis dan macam kendaraan yang memenuhi kebutuhan dan preferensi berbagai konsumen.
                                </p>
                                <a class="btn btn-md btn-gradient">See More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row align-center">
                            <div class="col-lg-7 col-md-12 thumb">
                                <img src="/assets/img/nabati.jpg" width="500" alt="Thumb">                          
                            </div>
                            <div class="col-lg-5 col-md-12 info">
                                <h3><strong>02</strong> Nabati</h3>
                                <p>
                                    PT Kaldu Sari Nabati Indonesia (KSNI), merupakan unit bisnis rintisan awal dari Nabati Group. Perusahaan ini bergerak di industri makanan dan minuman ringan.
                                    Perusahaan ini memiliki sejumlah merek produk dan rasa yang telah banyak dikenal konsumen, antara lain : Nabati, Nextar, Richeese dan Richoco.
                                </p>
                                <a class="btn btn-md btn-gradient">See More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane fade">
                        <div class="row align-center">
                            <div class="col-lg-7 col-md-12 thumb">
                                <img src="/assets/img/ymm.jpg" width="500" alt="Thumb">
                            </div>
                            <div class="col-lg-5 col-md-12 info">
                                <h3><strong>03</strong> YAMAHA</h3>
                                <p>
                                    Yamaha adalah sebuah perusahaan yang menawarkan berbagai produk dan jasa, terutama alat musik dan elektronik. Nama Yamaha diambil dari nama pendirinya, Torakusu Yamaha, yang awalnya memperbaiki organ. Yamaha didirikan lebih dari 130 tahun yang lalu di Jepang dan sekarang menjadi salah satu perusahaan yang paling terdiversifikasi di Jepang. 
                                    Yamaha juga memproduksi sepeda motor di Indonesia melalui PT Yamaha Indonesia Motor Manufacturing.
                                </p>
                                <a class="btn btn-md btn-gradient">See More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->

    <!-- Start Overview 
    ============================================= -->
    <div id="overview" class="tab-overview-area relative default-padding">
        
    </div>
    <!-- End Overview -->

    <!-- Start Team 
    ============================================= -->
    {{-- <div id="team" class="team-area bg-gray default-padding bottom-less">
        <!-- Shape -->
        <div class="fixed-shape" style="background-image: url(assets/img/shape/5.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/1.jpg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle" class="share-toggle" hidden>
                                    <label for="toggle" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Ahem Natasha</h4>
                                <span>Operations officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/2.jpg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle2" class="share-toggle" hidden>
                                    <label for="toggle2" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Devid mark</h4>
                                <span>Graphic designer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/3.jpg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle3" class="share-toggle" hidden>
                                    <label for="toggle3" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Brave Hammam</h4>
                                <span>Web developer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Team Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div id="testimoni" class="testimonials-area carousel-shadow default-padding-top">
        <!-- Shape -->
        <div class="fixed-shape-left">
            <img src="/assets/img/shape/9.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="testimonial-items">
                <div class="row align-center">
                    <div class="col-lg-7 review">
                        <h2>Testimoni</h2>
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="/assets/img/magang jepang.jpeg" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                       Kunjungan dari SMK YPC Tasikmalaya Ke LPK.SEKAI JAPAN CORPORATION.
                                        Pict dengan anak-anak alumni SMK YPC Tasikmalaya yang sedang melaksanakan pelatihan untuk magang jepang
                                    </p>
                                    <h4>Program Magang Ke Jepang</h4>
                                    <span> Magang Jepang</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="/assets/img/pt nabati.jpg" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                       Karyawati PT.KALDU SARI NABATI. Pemberangkatan tahun 2020 dari BKK SMK YPC
                                    </p>
                                    <h4>Skarwati PT.KALDU SARI NABATI</h4>
                                    <span> Operator Produksi</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-5 thum">
                        <img src="/assets/img/illustration/12.png" alt="illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Pricing 
    ============================================= -->
    <div id="pricing" class="pricing-area default-padding">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Packages</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Trial Version</h4>
                                <span>Save 25%</span>
                                <h2><sup>$</sup>0 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Regular</h4>
                                <span>Save 35%</span>
                                <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-effect btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Extended</h4>
                                <span>Save 49%</span>
                                <h2><sup>$</sup>59 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div> --}}
    </div>
    <!-- End Pricing Area -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area default-padding-top bg-gray bottom-less">
        <!-- Shape -->
        <div class="fixed-shape-bottom">
            <img src="/assets/img/shape/6.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Postingan</h2>
                        {{-- <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/img/INFO_LOKER_PT_NABATI_NEW_BKK_YPC.png" alt="Thumb"></a>
                            <div class="date"><strong>18</strong> <span>Apr</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                            </div> 
                            <h4>
                                <a href="blog-single-with-sidebar.html">PT KALDU SARI NABATI</a>
                            </h4>
                            <p>
                                PT Kaldu Sari Nabati Indonesia (KSNI), merupakan unit bisnis rintisan awal dari Nabati Group. 
                                Perusahaan ini bergerak di industri makanan dan minuman ringan.Perusahaan ini memiliki sejumlah merek produk dan rasa yang telah banyak dikenal konsumen, 
                                antara lain : Nabati, Nextar, Richeese dan Richoco.

                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                {{-- <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/2.jpg" alt="Thumb"></a>
                            <div class="date"><strong>25</strong> <span>Aug</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 35 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Considered imprudence of he friendship boisterous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/3.jpg" alt="Thumb"></a>
                            <div class="date"><strong>05</strong> <span>Jul</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> user</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Overcame breeding or my concerns removing desirous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div> --}}
                <!-- End Single item -->

            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Contact Area 
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 info">
                    <h2>Kontak</h2>
                    {{-- <p>
                        Ini semua tentang manusia di balik merek dan mereka yang mengalaminya, kami ada di sana. Di tengah.
                    </p> --}}
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                Jl. Garut - Tasikmalaya,<br> Cikunten, Kec. Singaparna,<br> Kabupaten Tasikmalaya,<br> Jawa Barat 46414
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p>
                                0265546717
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 offset-lg-1 contact-form-box">
                    <div class="form-box">
                        <form action="/datakontak/create" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama" type="text">
                                        {{-- <span class="alert-error"></span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        {{-- <span class="alert-error"></span> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="no_tlp" name="no_tlp" placeholder="Phone" type="text">
                                        {{-- <span class="alert-error"></span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan"></textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row"> --}}
                                <div class="col-lg-12">
                                    <button  type="submit">Kirim    
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo_bkk-removebg-preview.png" alt="Logo">
                            <p>
                               Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja, memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi yang ada dalam BKK
                                {{-- sebagai wadah dalam pelatian tamatan yang sesuai dengan permintaan pencari kerja, sebagai wadah untuk menanamkan
                               jiwa wirausaha  bagi tamatan melalui pelatihan --}}
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>  
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Perusahaan</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Testimoni</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Postingan</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Kontak</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        {{-- <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Info Kontak</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Alamat:</strong>
                                            Jl. Garut - Tasikmalaya,<br> Cikunten, Kec. Singaparna,<br> Kabupaten Tasikmalaya,<br> Jawa Barat 46414
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:smkypctasikmalaya@gmail.com">smkypctasikmalaya@gmail.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:0265546717">0265546717</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2023. <a href="http://smk-ypc.sch.id/">SMK YPC Tasikmalaya</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/softar/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 15:30:22 GMT -->
</html>