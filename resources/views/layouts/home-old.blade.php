<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Dame Omon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" I create, design and innovate bold, beautiful & brave interface design systems that help people and solves problems all across the world and Africa">
    <meta name="author" content="">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/colors/red.css') }}" type="text/css">
</head>

<body>

    <div id="wrapper">

        <div class="page-overlay">
            <div class="preloader-wrap">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <header>

            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo" height="62px" src="{{ asset('images/omon-dame-logo.png') }}" alt="">
                                <img class="logo-2" height="62px" src="{{ asset('images/omon-dame-logo.png') }}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a class="active" href="{{ route('home') }}">Home</a>

								</li>
								<li><a href="{{ route('about') }}">About Me</a></li>

                                <li><a href="{{ route('categories.index') }}">Portfolio</a></li>

                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
						<!-- mainmenu close -->



                    </div>
                    <div class="banner-left-img col-md-2">
                        <a href="#menu" id="toggle"><span></span></a>

                        <div id="menu">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-instagram fa-lg"></i></a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- header begin -->

        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>


            @yield('content')




            <div id="loader-area">
                <div class="container">
                    <div class="project-load"></div>
                </div>
            </div>



            </div>
            <!-- content close -->
    </div>

            <!-- footer begin -->
            <footer data-bgcolor="#f9f9f9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 sm-mb10">
                            <div class="mt10">&copy; Copyright 2020 - Designed with love.  Made in Nigeria</div>
                        </div>


                    </div>
                </div>

            </footer>
            <!-- footer close -->

            <a href="#" id="back-to-top"></a>

            <div id="preloader">
                <div class="preloader1"></div>
            </div>



        <!-- Javascript Files
    ================================================== -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('js/easing.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/enquire.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/jquery.plugin.js') }}"></script>
		<script src="{{ asset('js/jquery.easeScroll.js') }}"></script>
        <script src="{{ asset('js/designesia.js') }}"></script>
        <script src="{{ asset('js/validation.js') }}"></script>

</body>

</html>
