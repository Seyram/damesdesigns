@extends('layouts.home')

@section('content')

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
                            <img class="logo" height="42px" src="images/dame-logo3.png" alt="">
                            <img class="logo-2" height="42px" src="images/dame-logo3.png" alt="">
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
                            <li><a class="active" href="{{ route('about') }}">About Me</a></li>

                            <li><a href="{{ route('categories.index') }}">Projects</a></li>

                            <li><a href="{{ route('contact-us') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mainmenu close -->

                </div>
                <div class="banner-left-img col-md-2">

                    <a href="#menu" id="toggle"><span></span></a>

                <div id="menu">
                    <div class="social-icons">
                        <!--
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-lg"></i></a>

                        -->
                        <a target="_blank"  href="#"><img height="30px" width="30px"  src="{{ asset('icons/telegram.svg') }}" alt=""></i></a>
                        <a target="_blank"  href="#"><img height="30px" width="30px"  src="{{ asset('icons/facebook1.svg') }}" alt=""></i></a>
                        <a target="_blank"  href="https://www.instagram.com/dames_design/"><img height="30px" width="30px"  src="{{ asset('icons/instagram1.svg') }}" alt=""></a>
                        <a target="_blank"  href="https://dribbble.com/dameomon"><img height="30px" width="30px" src="{{ asset('icons/dribble2.svg') }}" alt=""></a>
                        <a target="_blank"  href="mailto:omondame@gmail.com"><img height="30px" width="30px" src="{{ asset('icons/gmail.svg') }}"  alt=""></a>


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
           <!-- section begin -->
           <section id="section-intro" class="full-height relative owl-slide-wrapper text-light no-top no-bottom" data-bgimage="url(images/background/5.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50">

                <div class="center-y relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="spacer-single d-block d-sm-none d-md-block"></div>
                                <h1 class="big b">Find out Interesting stuffs
                                    <span><span class="underline"></span></span> <br> About Me.</h1>
                                <div class="spacer-single"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a href="#section-about" class="scroll-to">
                <span class="mouse">
                    <!-- <span class="scroll"></span> -->
                    <img class="scroll" src="icons/arrow-down.svg" alt="">
                </span>
            </a>
        </section>
        <!-- section close -->
                    <!-- section begin -->
                    <!--
                    <section id="section-about" class="text-light" data-bgcolor="#212121">
                        <div class="container">
                            <div style="align-items: center; display: flex; justify-content: center;" class="row no-gutters gallery-wrap sequence_pf">




                                <div class="col-lg-4 col-md-6 col-sm-6 sq-item">
                                    <div class="picframe wow">
                                        <div class="pf-click" data-value="project-details-slider.html">
                                            <span class="overlay">
                                                    <span class="title">
                                                        <span>Foodie</span>
                                            </span>
                                            </span>
                                            <img src="images/portfolio/pf%20(2).jpg" class="wow" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 sq-item wow">
                                    <div class="picframe wow">
                                        <div class="pf-click" data-value="project-details-youtube.html">
                                            <span class="overlay">
                                                    <span class="title">
                                                        <span>Calculative</span>
                                            </span>
                                            </span>
                                            <img src="images/portfolio/pf%20(3).jpg" class="wow" alt="" />
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div style="align-items: center; display: flex; justify-content: center;" class="row no-gutters gallery-wrap sequence_pf">




                                <div class="col-lg-4 col-md-6 col-sm-6 sq-item">
                                    <div class="picframe wow">
                                        <div class="pf-click" data-value="project-details-slider.html">
                                            <span class="overlay">
                                                    <span class="title">
                                                        <span>Calculative</span>
                                            </span>
                                            </span>
                                            <img src="images/portfolio/pf%20(1).jpg" class="wow" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 sq-item wow">
                                    <div class="picframe wow">
                                        <div class="pf-click" data-value="project-details-youtube.html">
                                            <span class="overlay">
                                                    <span class="title">
                                                        <span>Foodie</span>
                                            </span>
                                            </span>
                                            <img src="images/portfolio/pf%20(4).jpg" class="wow" alt="" />
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </section>
                     -->
                     <!--
                     <section style="background-color:#212121;" class="bg-coloro text-light pt60 pb60" id="section-services">
                        <div class="container">

                            <div style="align-items: center; display: flex; justify-content: center;" class="row align-items-center">

                                <div class="col-md-6">
                                    <div class="row sequence">

                                        <div class="col-md-8 mb40 sq-item wow sq-item wow">



                                            <h2 style="color: #000000" class="mb20">Foodie</h2>
                                            <div class="spacer-half"></div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box style-2 left">


                                    </div>
                                    <figure class="picframe invert transparent hover-shadow rounded">

                                        <img src="images/portfolio/pf%20(3).jpg" class="img-fullwidth" alt="">
                                    </figure>
                                </div>


                            </div>
                            <div style="align-items: center; display: flex; justify-content: center;" class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="feature-box style-2 left">


                                    </div>
                                    <figure class="picframe invert transparent hover-shadow rounded">

                                        <img src="images/portfolio/pf%20(1).jpg" class="img-fullwidth" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="row sequence">

                                        <div class="col-md-8 mb40 sq-item wow sq-item wow ">



                                            <h2 style="color: #000000" class="mb20">Foodie</h2>
                                            <div class="spacer-half"></div>

                                        </div>


                                    </div>
                                </div>



                            </div>


                        </div>
                    </section>
                    -->
                        <!-- section begin -->
             {{--}}
        <section style="background-color:#90CED2;" class="bg-coloro text-light pt60 pb60" id="section-services">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="feature-box style-2 left">

                            <div class="text">
                                <h3></h3>

                            </div>
                        </div>
                        <figure class="picframe invert transparent hover-shadow rounded">
                            <!----
                                <span class="overlay-v">
                                    <span class="v-center">
                                        <span>
                                            <a id="play-video" class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=CmCIZ_aUAeQ">
                                                <span></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            -->
                            <img src="images/portfolio/omon-1.png" class="img-fullwidth" alt="">
                        </figure>
                    </div>
                    <div class="col-md-5">
                        <div class="row sequence">
                            <!-- feature box begin -->
                            <div class="col-md-8 mb40 sq-item wow sq-item wow">

                                <p style="color: #000000">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, lorem mi velit, bibendum sagittis tempor. Eu elementum, et cras posuere at lacinia proin quam vulputate. Condimentum integer dictum et, quis libero, quis mauris dictumst. Erat egestas id malesuada in sagittis, id eget.
                                </p>
                                <h2 style="color: #000000" class="mb20">Gilly Interiors <br> Website.</h2>
                                <div class="spacer-half"></div>

                            </div>
                            <!-- feature box close -->

                        </div>
                    </div>


                </div>


            </div>
        </section>

        <section style="background-color:#A7EDAD;" class="bg-coloro text-light pt60 pb60" id="section-services">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-5">
                        <div class="row sequence">
                            <!-- feature box begin -->
                            <div class="col-md-8 mb40 sq-item wow sq-item wow">


                                <p style="color: #000000">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, lorem mi velit, bibendum sagittis tempor. Eu elementum, et cras posuere at lacinia proin quam vulputate. Condimentum integer dictum et, quis libero, quis mauris dictumst. Erat egestas id malesuada in sagittis, id eget.
                                </p>
                                <h2 style="color: #000000" class="mb20">DBT Cleans <br> Website.</h2>
                                <div class="spacer-half"></div>

                            </div>
                            <!-- feature box close -->

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="feature-box style-2 left">

                            <div class="text">
                                <h3></h3>

                            </div>
                        </div>
                        <figure class="picframe invert transparent hover-shadow rounded">
                            <!----
                                <span class="overlay-v">
                                    <span class="v-center">
                                        <span>
                                            <a id="play-video" class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=CmCIZ_aUAeQ">
                                                <span></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            -->
                            <img src="images/portfolio/omon-a.png" class="img-fullwidth" alt="">
                        </figure>
                    </div>


                </div>


            </div>
        </section>
        --}}

                    <!-- section close -->
                    <div id="loader-area" data-bgcolor="#fafafa">
                        <div class="container">
                            <div class="project-load"></div>
                        </div>
                    </div>

                        <!-- section begin -->
            <section style="background-color: #F6F6F6;" id="section-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-centerd">
                            <h2>Get To Know Me <span><span class="underline"></span></span></h2>
                        </div>

                        <div class="col-md-12">

                            <p>
                                Hi there! My name is Omon.  I‘m a UI UX Designer who lives  in the city of Lagos, NIgeria. I am an open minded  person  who believes that problems exist only to be solved but this all starts in the mind. This mindset made me develop an interest in UI UX design and focusing on solving digital problems.
                            </p>
                            <p>
                                I currrently work as a freelancer in Nigeria and I collaborate with like minded people whose aim is to create services that offer solutions.
                            </p>
                            <p>
                                I enjoy learning and experiencing new challenges. I believe the beauty and art of design is liberal and cannot be put into a box or dependent on criteria and number of experiences.
                            </p>
                            <div class="spacer-half"></div>


                        </div>


                    </div>
                    {{--}}
                    <div style="align-items: center; display: flex; justify-content: center;" class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30">
                            <div class="profile_pic text-center">
                                <figure class="picframe sc-icon mb20">

                                    <img src="images/partner1.png" class="img-fluid" alt="">
                                </figure>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30">
                            <div class="profile_pic text-center">
                                <figure class="picframe sc-icon mb20">

                                    <img src="images/udemy.png" class="img-fluid" alt="">
                                </figure>

                            </div>
                        </div>

                    </div>
                    --}}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="spacer-half"></div>
                            <div style="align-items: center; display: flex; justify-content: center;">
                                <a href="" class="btn-custom scroll-to">Contact Me</a>
                            </div>
                            {{--}}
                            <div style="align-items: center; display: flex; justify-content: center;">
                                <a href="" class="">Download CV</a>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>

            </section>
            <!-- section close -->
                <!-- section begin -->
         <section style="padding-bottom: 10px;" class="text-light" id="section-blog" data-bgcolor="#000000">
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
                                            <a target="_blank"  href="https://t.me/Dameomon"><img height="30px" width="30px"  src="{{ asset('icons/telegram.svg') }}" alt=""></i></a>
                                            <a target="_blank"  href="https://wa.me/2349066096400"><img height="30px" width="30px"  src="{{ asset('icons/facebook1.svg') }}" alt=""></i></a>
                                            <a target="_blank"  href="https://www.instagram.com/dames_design/"><img height="30px" width="30px"  src="{{ asset('icons/instagram1.svg') }}" alt=""></a>
                                            <a target="_blank"  href="https://dribbble.com/dameomon"><img height="30px" width="30px" src="{{ asset('icons/dribble2.svg') }}" alt=""></a>
                                            <a target="_blank"  href="mailto:omondame@gmail.com"><img height="30px" width="30px" src="{{ asset('icons/gmail.svg') }}"  alt=""></a>
                                        </div>
                                    </div>

                                     <!--

                                <p style="text-align: center;">
                                    Made in Nigeria
                                </p>
                             -->
                                    <div class="spacer-half"></div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- section close -->






        <div id="loader-area">
            <div class="container">
                <div class="project-load"></div>
            </div>
        </div>



    </div>
        <!-- content close -->
</div>


@endsection
