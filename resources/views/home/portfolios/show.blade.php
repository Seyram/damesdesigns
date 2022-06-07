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
                            <li><a  href="{{ route('home') }}">Home</a>

                            </li>
                            <li><a href="{{ route('about') }}">About Me</a></li>

                            <li><a class="active" href="{{ route('categories.index') }}">Projects</a></li>

                            <li><a  href="{{ route('contact-us') }}">Contact</a></li>
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
           <section id="subheader" class="text-light" data-bgimage="url({{ asset('images/background/10.jpg') }})" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50">

                <div class="container">
                    <div class="row">
                        <div style="text-align: center;" class="col-md-12">
                            <h1>{{ $portfolio->title }}</h1>

                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom text-light" data-bgcolor="#000000">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <img src="{{ optional($portfolio->photo)->getUrl() ?? asset('images/portfolio/header-1-scaled.jpg') }}" class="img-fullwidth" alt="">

                </div>
                <div class="spacer-single"></div>
            </div>
        </section>

        @if($portfolio->client_name || $portfolio->duration )
        <section class=" text-light pt60 pb60" style="background-size: cover;" data-bgcolor="#000000">
            <div class="container" style="background-size: cover;">

                <div class="row" style="background-size: cover;">

                    <div class="col-md-3 col-sm-6 col-xs-6 mb-sm-30" style="background-size: cover;">
                        <div class="de_count" style="background-size: cover;">
                            <h4>Client</h4>
                            <span>{!! $portfolio->client_name !!}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 mb-sm-30" style="background-size: cover;">
                        <div class="de_count" style="background-size: cover;">
                            <h4>Duration</h4>
                            <span>{!! $portfolio->duration !!}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 mb-sm-30" style="background-size: cover;">
                        <div class="de_count" style="background-size: cover;">
                            <h4>Team</h4>
                            <span>{!! $portfolio->team !!}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 mb-sm-30" style="background-size: cover;">
                        <div class="de_count" style="background-size: cover;">
                            <h4>Role</h4>
                            <span>{!! $portfolio->role !!}</span>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        @else
        @endif

        @if($portfolio->context_text || $portfolio->context_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">

                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!-- <h2 class="mb20 ">Context</h2> -->
                        {!! $portfolio->context_text !!}

                       </div>
                        </div>
                </div>


                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->context_image)


                        <a class="image-popup" href="{{ optional($portfolio->context_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->context_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->challenge_text || $portfolio->challenge_images )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">


                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!-- <h2 class="mb20 ">Challenge</h2> -->
                        {!! $portfolio->challenge_text !!}
                       </div>


                        </div>
                </div>


                <div class="row gallery-wrap sequence_pf" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">
                    @if($portfolio->challenge_images->count())
					@foreach($portfolio->challenge_images as $challenge)
                    @if($challenge->count() < 2)
                    <div class="col-lg-12 col-md-6 col-sm-6 mb30 sq-item">
                        <div class="picframe wow">

                            <a class="image-popup" href="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                                <span class="overlay-v">
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                </span>
                            </a>
                            <img src="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        </div>
                    </div>
                    @elseif($challenge->count() == 2 )
                    <div class="col-lg-6 col-md-6 col-sm-6 mb30 sq-item">
                        <div class="picframe wow">

                            <a class="image-popup" href="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                                <span class="overlay-v">
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                </span>
                            </a>
                            <img src="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        </div>
                    </div>
                    @elseif($challenge->count() == 3 )
                    <div class="col-lg-4 col-md-6 col-sm-6 mb30 sq-item">
                        <div class="picframe wow">

                            <a class="image-popup" href="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                                <span class="overlay-v">
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                </span>
                            </a>
                            <img src="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        </div>
                    </div>
                    @elseif($challenge->count() > 3 )
                    <div class="col-lg-3 col-md-6 col-sm-6 mb30 sq-item">
                        <div class="picframe wow">

                            <a class="image-popup" href="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                                <span class="overlay-v">
                                    <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                                </span>
                            </a>
                            <img src="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        </div>
                    </div>
                    @elseif($challenge->count() == 6 )
                    <div class="col-lg-2 col-md-6 col-sm-6 mb30 sq-item">
                        <div class="picframe wow">

                            <a class="image-popup" href="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                                <span class="overlay-v">
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                </span>
                            </a>
                            <img src="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        </div>
                    </div>
                    @endif


                    @endforeach
					@endif
                     {{--}}
                    <div class="col-md-8" style="background-size: cover;">

                        @if($portfolio->challenge_image)
                        <a class="image-popup" href="{{ optional($portfolio->challenge_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                <span class="v-center">
                                    <span style="text-align: center;">Click to Zoom In</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->challenge_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                        @endif





                    @if($portfolio->challenge_images->count())
					@foreach($portfolio->challenge_images as $challenge)
                    <img src="{{ optional($challenge)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                    @endforeach
					@endif




                   </div>
                    --}}

                </div>


            </div>
        </section>
        @else
        @endif




        @if($portfolio->research_text || $portfolio->research_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fuild" style="background-size: cover;">

                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                       <!-- <h2 class="mb20 ">Research</h2> -->
                        {!! $portfolio->research_text !!}
                       </div>
                        </div>
                </div>


                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">



                        @if($portfolio->research_image)


                        <a class="image-popup" href="{{ optional($portfolio->research_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                               <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->research_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->user_text || $portfolio->user_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">

                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                       <!--  <h2 class="mb20 ">Users</h2> -->
                        {!! $portfolio->user_text !!}
                       </div>
                        </div>
                </div>

                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">


                        @if($portfolio->user_image)

                        <a class="image-popup" href="{{ optional($portfolio->user_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                  <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->user_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                        @else

                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->design_process_text || $portfolio->design_process_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">

                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                       <!-- <h2 class="mb20 ">Design Process</h2> -->
                        {!! $portfolio->design_process_text !!}
                       </div>
                        </div>
                </div>

                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->design_process_image)

                        <a class="image-popup" href="{{ optional($portfolio->design_process_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->design_process_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif


        @if($portfolio->interactive_prototype_text || $portfolio->interactive_prototype_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">
                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!-- <h2 class="mb20 ">Interactive Prototype</h2> -->
                        {!! $portfolio->interactive_prototype_text !!}
                       </div>
                        </div>
                </div>

                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->interactive_prototype_image)

                        <a class="image-popup" href="{{ optional($portfolio->interactive_prototype_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                  <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->interactive_prototype_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->wireframe_text || $portfolio->wireframe_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">


                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!-- <h2 class="mb20 ">Wireframes</h2> -->
                        {!! $portfolio->wireframe_text !!}
                       </div>
                        </div>
                </div>


                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->wireframe_image)

                        <a class="image-popup" href="{{ optional($portfolio->wireframe_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                  <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->wireframe_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->design_iteration_text || $portfolio->design_iteration_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">

                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!-- <h2 class="mb20 ">Design Iterations</h2> -->
                        {!! $portfolio->design_iteration_text !!}
                       </div>
                        </div>
                </div>

                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->design_iteration_image)

                        <a class="image-popup" href="{{ optional($portfolio->design_iteration_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                  <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->design_iteration_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif


        @if($portfolio->final_prototype_text || $portfolio->final_prototype_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">
                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                       <!-- <h2 class="mb20 ">Final Prototype</h2> -->
                        {!! $portfolio->final_prototype_text !!}
                       </div>
                        </div>
                </div>



                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center" >
                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->final_prototype_image)
                        <a class="image-popup" href="{{ optional($portfolio->final_prototype_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                 <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->final_prototype_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">
                        @else
                        @endif

                   </div>

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif


        @if($portfolio->design_system_text || $portfolio->design_system_image )
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">

                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!--<h2 class="mb20 ">Design System</h2> -->
                        {!! $portfolio->design_system_text !!}
                       </div>
                        </div>
                </div>


                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->design_system_image)
                        <a class="image-popup" href="{{ optional($portfolio->design_system_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                  <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->design_system_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">


                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->final_design_image || $portfolio->final_design_text )
        <section id="section-abouts" class="text-light" data-bgcolor="#000000" style=" background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">


                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!--<h2 class="mb20 ">Final Designs</h2> -->
                        {!! $portfolio->final_design_text !!}
                       </div>
                        </div>
                </div>


                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->final_design_image)

                        <a class="image-popup" href="{{ optional($portfolio->final_design_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                  <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->final_design_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">


                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->outcome_text || $portfolio->outcome_image)
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">


                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                        <!--<h2 class="mb20 ">Outcome</h2> -->
                        {!! $portfolio->outcome_text !!}
                       </div>
                        </div>
                </div>

                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->outcome_image)


                        <a class="image-popup" href="{{ optional($portfolio->outcome_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                                  <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->outcome_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        @if($portfolio->learning_text || $portfolio->learning_image)
        <section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
            <div class="container-fluid" style="background-size: cover;">

                <div class="row">
                    <div class="col-md-12" style="background-size: cover; align-items: center; display: flex; justify-content: center;  ">
                       <div class="text-container">
                       <!-- <h2 class="mb20 ">Learnings</h2> -->
                        {!! $portfolio->learning_text !!}

                       </div>
                        </div>
                </div>



                <div class="row" style="background-size: cover; align-items: center; display: flex; justify-content: center; text-align:center">

                    <div class="col-md-12" style="background-size: cover;">

                        @if($portfolio->learning_image)


                        <a class="image-popup" href="{{ optional($portfolio->learning_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" >
                            <span class="overlay-v">
                               <!--
                                    <span class="v-center">
                                        <span style="text-align: center;">Click to Zoom In</span>
                                    </span>
                                    -->
                            </span>
                        </a>
                        <img src="{{ optional($portfolio->learning_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

                        @endif

                   </div>

                </div>


            </div>
        </section>
        @else
        @endif

        <!--
        <section id="section-screenshots" aria-label="section" class="text-light" data-bgcolor="#2d3840" style="background-color: rgb(45, 56, 64); background-size: cover;">
            <div id="ss-carousel" class="owl-carousel owl-theme owl-loaded owl-drag" style="background-size: cover;">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transition: all 0.25s ease 0s; width: 5520px; transform: translate3d(-3277px, 0px, 0px);">
                        <div class="owl-item cloned" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/5.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/5.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item cloned" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/6.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/6.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item cloned" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/7.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/7.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item cloned" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/8.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/8.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/1.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/1.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/2.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/2.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/3.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/3.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/4.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/4.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/5.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/5.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/6.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/6.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item active" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/7.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/7.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item active center" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/8.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/8.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item cloned active" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/1.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/1.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item cloned active" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/2.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/2.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item cloned" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/3.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/3.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                        <div class="owl-item cloned" style="width: 245px; margin-right: 100px;">
                            <figure class="picframe">
                                <a class="image-popup" href="images/ss/4.jpg">
                                    <span class="overlay-v">
                                        <span class="v-center text-center">
                                            <span>
                                                View larger
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <img src="images/ss/4.jpg" class="img-fullwidth" alt="" />
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                </div>
                <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button>
                </div>
            </div>
        </section>
        -->

        <section   data-bgcolor="#ffffff">
            <div class="container">
                <div class="row">
                    <div style="text-align: center;" class="col-md-12">
                        <h1 style="color: #fae104">" {!! $portfolio->testimonial_text !!}."</h1>
                        <p>
                            {!! $portfolio->testimonial_name !!}
                        </p>

                    </div>
                </div>
            </div>

        </section>

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














    </div>
        <!-- content close -->
</div>


@endsection
