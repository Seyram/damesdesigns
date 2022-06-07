@extends('layouts.home')

@section('content')
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

<section style="background-color: #000000;" id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom text-light" data-bgcolor="#fafafa">
    <div class="container-fluid">
        <div class="row no-gutters gallery-wrap sequence_pf">
            @if(count($category->portfolios))
            @php $i=0; @endphp
            @foreach($category->portfolios as $portfolio)
            @php $i++; @endphp
            <!-- gallery item -->
            <div class="col-lg-3 col-md-6 col-sm-6 sq-item">
                <div class="picframe wow">
                    <a href="{{ route('portfolios.show', [$portfolio->slug, $portfolio->id]) }}">
                    <div class="pf-click" data-value="{{ route('portfolios.show', [$portfolio->slug, $portfolio->id]) }}">

                        <img src=" {{ optional($portfolio->photo)->getUrl() ?? asset('images/portfolio/pf%20(1).jpg') }}" class="wow" alt="" />
                    </div>
                </a>
                </div>
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


                        @foreach($footerCategories as $category)
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
