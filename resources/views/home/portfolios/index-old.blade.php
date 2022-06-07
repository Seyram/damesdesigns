<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <title>Dameomon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" I create, design and innovate bold, beautiful & brave interface design systems that help people and solves problems all across the world and Africa">
        <meta name="author" content="">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- CSS Files
        ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css" type="text/css">
        <link rel="stylesheet" href="css/animate.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/colors/red.css" type="text/css">
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

        <!-- header begin -->
        <header>

            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo" height="62px" src="images/omon-dame-logo.png" alt="">
                                <img class="logo-2" height="62px" src="images/omon-dame-logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a  href="{{ route('home') }}">Home</a>

								</li>
								<li><a href="{{ route('about') }}">About Me</a></li>

                                <li><a class="active" href="{{ route('portfolio') }}">Portfolio</a></li>

                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
						<!-- mainmenu close -->

                    </div>
                    <div class="banner-left-img col-md-2">
                        <a href="#menu" id="toggle"><span></span></a>

                        <div id="menu">
                            <ul>
                                <li><a href="#"><img  src="icons/telegram.svg" alt=""></i></a></li>
                                <li><a href="#"><img  src="icons/telegram.svg" alt=""></i></a></li>
                                <a href="#"><img  src="icons/telegram.svg" alt=""></i></a>
                            </ul>
                        </div>

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/10.jpg)" data-stellar-background-ratio=".2">
                <div class="overlay-bg t50">

                    <div class="container">
                        <div class="row">
                            <div style="text-align: left;" class="col-md-12">
                                <h1>User Interphase Design</h1>
                             <!---- <h3>User Experience Design</h3>
								<p>User Interphase Design</p>
                            -->
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- section close -->
            <section style="background-color: #000000;" id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom text-light" data-bgcolor="#fafafa">
                <div class="container-fluid">
                    <div class="row no-gutters gallery-wrap sequence_pf">
                        @foreach($portfolios as $portfolio)
                        <!-- gallery item -->
                        <div class="col-lg-3 col-md-6 col-sm-6 sq-item">
                            <div class="picframe wow">
                                <a href="{{ route('portfolios.show', [$portfolio->slug, $portfolio->id]) }}"></a>
                                <div class="pf-click" data-value="{{ route('portfolios.show', [$portfolio->slug, $portfolio->id]) }}">

                                    <img src=" {{ optional($portfolio->photo)->getUrl() ?? asset('images/portfolio/pf%20(1).jpg') }}" class="wow" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- close gallery item -->
                        @endforeach




                    </div>
                    <div class="spacer-single"></div>

                    <div style="align-items: center; display: flex; justify-content: center;" class="row">
                        <div class="col-md-12 text-center">
                            <div class="post-content">
                                <div class="post-text">
                                    <h3><a href="#">User Experience Design</a></h3>
                                    <h3><a href="#">Graphic Design</a></h3>
                                    <h3><a href="#">Stop Motion Animation</a></h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="loader-area" data-bgcolor="#fafafa">
                <div class="container">
                    <div class="project-load"></div>
                </div>
            </div>

            <section style = "padding-bottom: 10px;" class="text-light" id="section-blog" data-bgcolor="#000000">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="post-item s1 item">


                                <div class="post-content">
                                    <div class="post-text">

                                        <p style="text-align: center;">
                                            Feel free to reach out for collaborations or just a friendly hello <br>
                                        </p>
                                        <div class="spacer-half"></div>
                                        <div style="align-items: center; display: flex; justify-content: center;" class="">
                                            <div class="social-icons">
                                                <a href="#"><img  src="icons/telegram.svg" alt=""></i></a>
                                                <a href="#"><img src="icons/whatsapp.svg" alt=""></i></a>
                                                <a href="#"><img src="icons/instagram.svg" alt=""></a>
                                                <a href="#"><img src="icons/Vector.svg" alt=""></a>
                                                <a href="#"><img src="icons/gmail.svg" alt=""></a>
                                            </div>
                                        </div>

                                        <p style="text-align: center;">
                                            Made in Nigeria
                                        </p>
                                        <div class="spacer-half"></div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            </div>
            <!-- content close -->

            <!-- footer begin -->
            <footer data-bgcolor="#f9f9f9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 sm-mb10">
                            <div class="mt10">&copy; Copyright 2020 - Designed with love</div>
                        </div>
                        <!--
                        <div class="col-md-6 text-left text-md-right">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>
                    -->
                    </div>
                </div>

            </footer>
            <!-- footer close -->

            <a href="#" id="back-to-top"></a>

            <div id="preloader">
                <div class="preloader1"></div>
            </div>

        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/easing.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/enquire.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.plugin.js"></script>
		<script src="js/jquery.easeScroll.js"></script>
        <script src="js/designesia.js"></script>
        <script src="js/validation.js"></script>

</body>

</html>
