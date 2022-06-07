@extends('layouts.home')

@section('content')
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
    <div class="container">
        <div class="row align-items-center">
            <img src="{{ optional($portfolio->photo)->getUrl() ?? asset('images/portfolio/header-1-scaled.jpg') }}" class="img-fullwidth" alt="">

        </div>
        <div class="spacer-single"></div>
    </div>
</section>
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
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Context</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                <p>
                    {!! $portfolio->context_text !!}
                </p>


                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->context_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Challenge</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->challenge_text !!}


                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->challenge_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="subheader" class=""  data-bgcolor="#ffffff">

    <div class="container">
        <!--
        <div class="row">
            <div style="text-align: center;" class="col-md-8">
                <h1>
                    How might we simplify the UI to make the app easier to use and improve the user experience?
                </h1>

            </div>
        </div>
        -->
    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Research</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">

                {!! $portfolio->research_text !!}

                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->research_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Users</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->user_text !!}


                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->user_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Design Process</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->design_process_text !!}



                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->design_process_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Wireframes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->wireframe_text !!}



                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->wireframe_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Interactive Prototype</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->interactive_prototype_text !!}



                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->interactive_prototype_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Design Iterations</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->design_iteration_text !!}



                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->design_iteration_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Final Prototype</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->final_prototype_text !!}




                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->final_prototype_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Design System</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->design_system_text !!}




                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->design_system_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" class="text-light" data-bgcolor="#000000" style=" background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Final Designs</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->final_design_text !!}




                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->final_design_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Outcome</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->outcome_text !!}




                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->outcome_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
<section id="section-abouts" data-bgcolor="#ffffff" style="background-color: rgb(255, 255, 255); background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2 class="mb20">Learnings</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-" style="background-size: cover;">
                {!! $portfolio->learning_text !!}

                </div>
        </div>
        <div class="row" style="background-size: cover;">

            <div class="col-md-8" style="background-size: cover;">
                <img src="{{ optional($portfolio->learning_image)->getUrl() ?? asset('images/products/selection-of-products.jpg') }}" class="img-fullwidth" alt="">

           </div>

        </div>


    </div>
</section>
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
@endsection
