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
                            <img class="logo" height="42px" src="{{ asset('images/dame-logo3.png') }}" alt="">
                            <img class="logo-2" height="42px" src="{{ asset('images/dame-logo3.png') }}" alt="">
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


           <!-- section begin -->
           <section id="section-intro" class="full-height relative owl-slide-wrapper text-light no-top no-bottom" data-bgimage="url(images/background/92.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50">

                <div class="center-y relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div  class="spacer-double d-block d-sm-none d-md-block"></div>
                                <h2 style="margin-top: 80px; font-weight: bold; color: #947272;" >ui/ux Designer</h2>
                                <h1 style="font-weight: normal;" class="big b">Hello! I???m Omon Dame. I <strong>create</strong>, <strong>design</strong> and <strong>innovate</strong> bold, beautiful & brave interface design systems that help people and solves <strong>problems</strong> all across the world and Africa.<span class="id-color"></span></h1>
                                <div class="spacer-single"></div>
                                <a href="" class="btn-custom">Say Hello</a>
                            </div>
                            <div class="banner-left-img  col-md-6">
                                <img  src="images/banner-user.png" class="mb-sm-30 img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a href="#section-services" class="scroll-to">
                <span class="mouse">
                    <!-- <span class="scroll"></span> -->
                    <img class="scroll" src="icons/arrow-down.svg" alt="">
                </span>
            </a>
        </section>

        <!-- section close -->

        <!-- section begin -->
        <section style="background-color:#B29BC7;" class="bg-coloro text-light pt60 pb60" id="section-services">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="feature-box style-2 left">

                            <div class="text">
                                <h3>Case Study 1</h3>

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
                            <img src="images/interior-page-1.png" class="img-fullwidth" alt="">
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
                                <a style="background-color: #000000;" href="" class="btn-custom scroll-to"><span><i class="fa fa-arrow-right"></i></span></a>
                            </div>
                            <!-- feature box close -->

                        </div>
                    </div>


                </div>


            </div>
        </section>
        <!-- section close -->
        <section style="background-color:#A1C2D1;" class="bg-coloro text-light pt60 pb60" id="section-services">
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
                                <a style="background-color: #000000; " href="" class="btn-custom scroll-to"><span><i class="fa fa-arrow-right"></i></span></a>
                            </div>
                            <!-- feature box close -->

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="feature-box style-2 left">

                            <div class="text">
                                <h3>Case Study 2</h3>

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
                            <img src="images/dbt-1.png" class="img-fullwidth" alt="">
                        </figure>
                    </div>


                </div>


            </div>
        </section>

        <section style="padding-bottom: 10px;" class="text-light" id="section-blog" data-bgcolor="#000000">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="post-item s1 item">


                            <div class="post-content">
                                <div class="post-text">
                                    <h2 style="text-align: center;" class="mb20">???Ready To Start A Project????</h2>
                                    <p style="text-align: center;">
                                        Let's Work Together <br> Have a project you'd like to discuss?
                                    </p>
                                    <div class="spacer-half"></div>
                                  <div style="align-items: center; display: flex; justify-content: center;">
                                     <a style="color: #A1C2D1" href="" class="btn-border">Get in Touch</a>
                                    </div>
                                    <div class="spacer-half"></div>
                                    <div style="align-items: center; display: flex; justify-content: center;" class="">
                                        <!--
                                        <div class="social-icons">
                                            <a href="#"><img  src="icons/telegram.svg" alt=""></i></a>
                                            <a href="#"><img src="icons/whatsapp.svg" alt=""></i></a>
                                            <a href="#"><img src="icons/instagram.svg" alt=""></a>
                                            <a href="#"><img src="icons/Vector.svg" alt=""></a>
                                            <a href="#"><img src="icons/gmail.svg" alt=""></a>
                                        </div>
                                        -->
                                    </div>

                                    <!--
                                    <p style="text-align: center;">
                                        Made in Nigeria
                                    </p>
                                    <div class="spacer-half"></div>
                                    -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>




        <div id="loader-area">
            <div class="container">
                <div class="project-load"></div>
            </div>
        </div>



        </div>
        <!-- content close -->
</div>


@endsection
