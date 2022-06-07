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
                            <li><a href="{{ route('about') }}">About Me</a></li>

                            <li><a href="{{ route('categories.index') }}">Projects</a></li>

                            <li><a class="active" href="{{ route('contact-us') }}">Contact</a></li>
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
        <section id="section-contact" data-bgcolor="#F6F6F6">
            <div class="container">
                <div  style="align-items: center; display: flex; justify-content: center; text-align:center" class="row">
                    <div class="col-md-6 mb-md-30">
                        <p>
                            Well thanks for taking the time to get a taste for what I do. I love working with people who want to make a difference in other people’s lives and who also want to win. Let’s get in touch if that’s you!
                        </p>
                    </div>
                </div>
                <div  style="align-items: center; display: flex; justify-content: center;" class="row">


                    <div class="col-md-6 mb-md-30">
                        @include('partials.alert')
                        <form  name="contactForm" id='contact_forms' class="de_form" method="post" action='{{ route('contact-us') }}'>
                            {{ csrf_field() }}
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
                                        <input type='text' name='subject' id='subject' class="form-control" placeholder="Subject">
                                        <div class="line-fx"></div>
                                    </div>
                                  </div>

                                <div class="col-md-12">
                                    <div class="field-set">
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                        <div class="line-fx"></div>
                                    </div>
                                </div>

                                <div style="align-items: center; display: flex; justify-content: center;"  class="col-md-12">
                                        <input style="color: #ffffff;" type='submit' id='send_messages' value='Let’s Start Work' class="btn btn-custom color-2">
                                </div>
                                    <!--
                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    -->
                                </div>


                            </div>
                        </form>

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
                                    <h2 style="text-align: center;" class="mb20">“Ready To Start A Project?”</h2>
                                    <p style="text-align: center;">
                                        Let's Work Together <br> Have a project you'd like to discuss?
                                    </p>
                                    <div class="spacer-half"></div>
                                  <div style="align-items: center; display: flex; justify-content: center;">
                                     <a href="" class="btn-border">Get in Touch</a>
                                    </div>
                                    <!--
                                    <p style="text-align: center;">
                                        Made in Nigeria
                                    </p>
                                    -->
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
