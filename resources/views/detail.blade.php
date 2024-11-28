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
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assetsr/img/favicon.ico') }}">

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
            <link rel="stylesheet" href="{{ asset('assetsr/css/responsive.css') }}">
   </head>

   <body>
    <main>
        <!-- About US Start -->
        <div class="about-area" style="margin-top: 100px;">
            <div class="container">
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                {{-- @if($beritas) --}}
                                <div class="about-img">
                                    <img src="{{ asset('images/beritas/' . $beritas->image) }}" alt="Gambar Berita">
                                </div>
                                {{-- @endif --}}
                                <div class="section-tittle mb-30 pt-30" style="text-align: justify">
                                    <h3>{{ $beritas->title }}</h3>
                                </div>
                                <div class="about-prea" style="text-align: justify;">
                                    {{ $beritas->content }}
                                </div>
                                <div class="" style="margin-top: 100px">
                                    Penulis: {{ $beritas->penulis }}
                                </div>
                                <div class="social-share pt-30" style="margin-top: 15px">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('assetsr/img/news/icon-ins.png') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('assetsr/img/news/icon-fb.png') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('assetsr/img/news/icon-tw.png') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('assetsr/img/news/icon-yo.png') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-40">
                                <h3>Follow Us</h3>
                            </div>
                            <!-- Flow Socail -->
                            <div class="single-follow mb-45">
                                <div class="single-box">
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('assetsr/img/news/icon-fb.png ') }}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('assetsr/img/news/icon-tw.png') }}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('assetsr/img/news/icon-ins.png') }}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{ asset('assetsr/img/news/icon-yo.png') }}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
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
