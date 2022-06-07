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

           <section id="subheader" class="text-light" data-bgimage="url(images/background/10.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50">

                <div class="container">
                    <div class="row">
                        <div style="text-align: left;" class="col-md-12">
                            <h1>{{ $category->name }}</h1>
                         <!---- <h3>User Experience Design</h3>
                            <p>User Interphase Design</p>
                        -->
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section style="background-color: #000000;" id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom" data-bgcolor="#F6F6F6">
            <div class="container">
                <div style="align-items: center; display: flex; justify-content: center; text-align:left" class="row ">
                    @if(count($category->portfolios))
                    @php $i=0; @endphp
                    @foreach($category->portfolios as $portfolio)
                    @php $i++; @endphp
                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 col-sm-6 sq-item">
                        <div class="spacer-single"></div>
                        <figure class="picframe invert transparent hover-shadow">
                            <a href="{{ route('portfolios.show', [$portfolio->slug, $portfolio->id]) }}">
                                <span class="overlay-v">
                                    <span class="v-center">
                                        <span>

                                        </span>
                                    </span>
                                </span>
                            </a>
                        <img src="{{ optional($portfolio->photo)->getUrl() ?? asset('images/user-interface-design.jpg') }}" class="img-fullwidth" alt="">
                        </figure>

                    <a href="{{ route('portfolios.show', [$portfolio->slug, $portfolio->id]) }}"><h3>{{ $portfolio->title }}</h3></a>
                    <!--  <p>{{ $portfolio->client_name }} </p> -->
                    <div class="spacer-single"></div>

                    </div>
                    <!-- close gallery item -->
                    @endforeach
                    {{ $portfolios->links('partials.pagination') }}
                    @else
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <p class="no-portfolio-h3" style="text-align: center; margin-top:30px; color:#000000;">No Portfolio found for this category</p>
                    </div>

                    @endif




                </div>
                <div class="spacer-single"></div>

                <div style="align-items: center; display: flex; justify-content: center;" class="row">
                    <div class="col-md-12 text-center">
                        <div class="post-content">
                            <div class="post-text">


                                @foreach($previousCategories as $category)
                                <li>

                                    <h3><a href="{{ route('categories.show', [$category->slug, $category->id]) }}">{{ $category->name }}</a></h3>
                                </li>
                                @endforeach

                                @foreach($nextCategories as $category)
                                <li>

                                    <h3><a href="{{ route('categories.show', [$category->slug, $category->id]) }}">{{ $category->name }}</a></h3>
                                </li>
                                @endforeach

                            </div>
                        </div>
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
