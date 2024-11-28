@extends('layouts.welcome')
@section('content')
    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bedbox News </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assetsr/img/favicon.ico">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assetsr/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/ticker-style.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsr/css/style.css') }}">
    </head>
    <style>
        .video-intro H4 {
            color: white;
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Membatasi menjadi 4 baris */
            -webkit-box-orient: vertical; /* Mengatur orientasi teks ke arah vertikal */
            overflow: hidden; /* Menyembunyikan teks yang terpotong */
            text-overflow: ellipsis; /* Menambahkan '...' jika teks terpotong */
        }
    </style>

    <body>

        <main>
            <!-- Trending Area Start -->
            <div class="trending-area fix mt-9" style="margin-top: 100px;">
                <div class="container">
                    <div class="trending-main">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Trending Top -->
                                @if ($ingfo && $ingfo)
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img">
                                            <a href="{{ route('detail',  $ingfo->slug) }}">
                                                <img src="{{ asset('/images/beritas/' . $ingfo->image) }}" alt="">
                                            </a>
                                            <div class="trend-top-cap">
                                                <h2>
                                                    <a href="{{ route('detail', $ingfo->slug ) }}">
                                                        {!! nl2br(e($ingfo->title)) !!}
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!-- Riht content -->

                            <div class="col-lg-4">
                                @foreach ($cuki as $data)
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="{{ asset('/images/beritas/' . $data->image) }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="trand-right-cap">
                                            <h4><a
                                                    href="{{ route('detail', $data->slug ) }}">{{ $data->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--   Weekly2-News start -->
            <div class="weekly2-news-area  weekly2-pading gray-bg">
                <div class="container">
                    <div class="weekly2-wrapper">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-tittle mb-30">
                                    <h3>Weekly Top News</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="weekly2-news-active dot-style d-flex dot-style">
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assetsr/img/news/weekly2News1.jpg" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">Corporate</span>
                                            <p>25 Jan 2020</p>
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assetsr/img/news/weekly2News2.jpg" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">Event night</span>
                                            <p>25 Jan 2020</p>
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assetsr/img/news/weekly2News3.jpg" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">Corporate</span>
                                            <p>25 Jan 2020</p>
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assetsr/img/news/weekly2News4.jpg" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">Event time</span>
                                            <p>25 Jan 2020</p>
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="assetsr/img/news/weekly2News4.jpg" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">Corporate</span>
                                            <p>25 Jan 2020</p>
                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Weekly-News -->
            <!-- Start Youtube -->
            <div class="youtube-area video-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="video-items-active">
                                <div class="video-items text-center">
                                    <iframe src="https://www.youtube.com/embed/BWz3yQiy_mk" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-items text-center">
                                    <iframe src="https://www.youtube.com/embed/YBk4hSDE10E" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-items text-center">
                                    <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                                <div class="video-items text-center">
                                    <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                                <div class="video-items text-center">
                                    <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-info">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="video-caption">
                                    <div class="top-caption">
                                        <span class="color1">Box!!</span>
                                    </div>
                                    <div class="bottom-caption">
                                        <h2 class="mt-5" style="color:white;">FINAL | Arya Rispana VS Muh Basir |
                                            SELEKSI Pra POPNAS JABAR 2024</h2>
                                        <p>Pertandingan final antara Arya Rispana dan Muh Basir dalam ajang Seleksi Pra
                                            POPNAS Jabar 2024 mempertemukan dua atlet muda berbakat yang bersaing ketat
                                            untuk meraih tempat di ajang nasional. Kedua atlet menunjukkan performa terbaik
                                            mereka, berjuang dengan penuh semangat dan teknik yang matang. Seleksi ini
                                            menjadi momen penting bagi keduanya untuk membuktikan kemampuan mereka dalam
                                            olahraga yang mereka geluti, sekaligus menjadi langkah awal menuju prestasi
                                            lebih tinggi di level nasional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testmonial-nav text-center">
                                    <div class="single-video">
                                        <iframe src="https://www.youtube.com/embed/v69Wi2jXzTA" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <div class="video-intro">
                                            <h4>FINAL | Valentino Atua VS Rizki Dwi Ramadhan | Seleksi Pra POPNAS JABAR 2024</h4>
                                        </div>
                                    </div>
                                    <div class="single-video">
                                        <iframe src="https://www.youtube.com/embed/eo-uK9Aqx8Y" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <div class="video-intro">
                                            <h4>FINAL | Haikal Hilmi VS Alfiero Fedrico | Seleksi Pra POPNAS JABAR 2024</h4>
                                        </div>
                                    </div>
                                    <div class="single-video">
                                        <iframe src="https://www.youtube.com/embed/I4mlSKkyDpo" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <div class="video-intro">
                                            <h4>FINAL | Angela Pattinama VS Jasmine Ceta | Seleksi Pra POPNAS JABAR 2024</h4>
                                        </div>
                                    </div>
                                    <div class="single-video">
                                        <iframe src="https://www.youtube.com/embed/xVYuOlTNH6k" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <div class="video-intro">
                                            <h4>FINAL | Yuanitha Margaretha VS Falensya Tibalimeten | Seleksi Pra POPNAS JABAR 2024</h4>
                                        </div>
                                    </div>
                                    <div class="single-video">
                                        <iframe src="https://www.youtube.com/embed/JdIk1SpjkYw" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <div class="video-intro">
                                            <h4>FINAL | Kisa Al Auliya VS Destina Picaulima | Seleksi Pra POPNAS JABAR 2024</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Start youtube -->
        </main>

        <!-- JS here -->

        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('./assetsr/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{ asset('./assetsr/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('./assetsr/js/popper.min.js') }}"></script>
        <script src="{{ asset('./assetsr/js/bootstrap.min.js') }}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{ asset('./assetsr/js/jquery.slicknav.min.js') }}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('./assetsr/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('./assetsr/js/slick.min.js') }}"></script>
        <!-- Date Picker -->
        <script src="{{ asset('./assetsr/js/gijgo.min.js') }}"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('./assetsr/js/wow.min.js') }}"></script>
        <script src="{{ asset('./assetsr/js/animated.headline.js') }}"></script>
        <script src="{{ asset('./assetsr/js/jquery.magnific-popup.js') }}"></script>

        <!-- Breaking New Pluging -->
        <script src="{{ asset('./assetsr/js/jquery.ticker.js') }}"></script>
        <script src="{{ asset('./assetsr/js/site.js') }}"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('./assetsr/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('./assetsr/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('./assetsr/js/jquery.sticky.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset('./assetsr/js/contact.js') }}"></script>
        <script src="{{ asset('./assetsr/js/jquery.form.js') }}"></script>
        <script src="{{ asset('./assetsr/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('./assetsr/js/mail-script.js') }}"></script>
        <script src="{{ asset('./assetsr/js/jquery.ajaxchimp.min.js') }}"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('./assetsr/js/plugins.js') }}"></script>
        <script src="{{ asset('./assetsr/js/main.js') }}"></script>

    </body>

    </html>
@endsection
