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
                            <a href="index.html">
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

                                <li><a href="{{ route('categories.index') }}">Portfolio</a></li>

                                <li><a class="active" href="{{ route('contact') }}">Contact</a></li>
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
            <section style="background-color: #000000;" id="section-intro" class="full-height relative bg-colors text-light no-top no-bottom" data-stellar-background-ratio=".2">
                <div class="overlay-bg t0">

                    <div class="center-y relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 text-center fadeScroll relative" data-scroll-speed="4">
                                    <div class="spacer-double d-block d-sm-none d-md-block"></div>
                                    <h1 class="big">Don’t hesitate!  <br>
                                        You can Contact Me Anytime!</h1>
                                    <div class="spacer-single"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<a href="#section-contact" class="scroll-to">
                    <span class="mouse">
						<!-- <span class="scroll"></span> -->
                        <img class="scroll" src="icons/arrow-down.svg" alt="">
                    </span>
				</a>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-contact" data-bgcolor="#90CED2">
                <div class="container">
                    <div  style="align-items: center; display: flex; justify-content: center;" class="row">
                        <div class="col-md-6 mb-md-30">
                            <p>
                                Well thanks for taking the time to get a taste for what I do. I love working with people who want to make a difference in other people’s lives and who also want to win. Let’s get in touch if that’s you!
                            </p>
                        </div>
                    </div>
                    <div  style="align-items: center; display: flex; justify-content: center;" class="row">


                        <div class="col-md-6 mb-md-30">
                            <form  name="contactForm" id='contact_form' class="de_form" method="post" action='email.php'>
                                <div  class="row">
                                    <div  class="col-md-12">
                                        <div class="field-set">
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                            <div class="line-fx"></div>
                                        </div>



                                    </div>
                                    <div class="col-md-12">

                                        <div class="field-set">
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                            <div class="line-fx"></div>
                                        </div>
                                      </div>

                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div id='submit'>
                                            <input style="color: #000000;" type='submit' id='send_message' value='Let’s Start Work' class="btn btn-custom color-2">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>


                                </div>
                            </form>

                        </div>



                    </div>

                </div>
            </section>
            <!-- section close -->

        </div>
        <!-- content close -->

                 <!-- section begin -->
                 <section style="padding-bottom: 10px;" class="text-light" id="section-blog" data-bgcolor="#000000">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="post-item s1 item">


                                    <div class="post-content">
                                        <div class="post-text">
                                            <h2 style="text-align: center;" class="mb20">“Ready To Start A Project?”</h2>
                                            <p style="text-align: center;">
                                                Let's Work Together <br> Have a project you'd like to discuss?
                                            </p>
                                            <div class="spacer-half"></div>
                                          <div style="align-items: center; display: flex; justify-content: center;">
                                             <a href="" class="btn-border">Get in Touch</a>
                                            </div>

                                            <p style="text-align: center;">
                                                Made in Nigeria
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

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>
                <!-- section close -->


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
