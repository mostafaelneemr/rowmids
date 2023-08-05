@extends('layouts.website.master')

@section('content')

<div class="slider-revoluation">
    <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-authentic-studio"
        data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
            <ul>
                <!-- SLIDE  -->
                @foreach ($sliders as $slider)
                    
                <li data-index="01" data-transition="curtain-1,curtain-3,curtain-2" data-slotamount="default,default,default,default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-randomtransition="on" data-easein="default,default,default,default"
                    data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"
                    data-thumb="{{asset('website/img/revoulation/100x50_slider-authentic-studio-slide-01-bg.jpg')}}" data-rotate="0,0,0,0"
                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    {{-- @if($section->image_url) --}}
                        <img src="{{asset($slider->image)}}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    {{-- @else --}}
                        {{-- <img src="{{ asset('website/img/slider/presentation/home-presentation-image-01.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    @endif --}}

                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" id="slide-16-layer-1" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-25','-28','-28','-10']" data-fontsize="['80','60','45','30']"
                        data-lineheight="['90','67','50','34']" data-width="['670','670','620','380']"
                        data-height="['none','135','none','none']" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 630px; max-width: 630px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">
                        {{$slider->title}}</div>

                </li>

                @endforeach
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>


  <!-- Start Breadcaump Area -->
  <div class="brook-breadcaump-area pt--130 pb--145 bg_color--1 breadcaump-title-bar">
    <div class="container-fluid plr--150 plr_sm--20">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcaump-inner text-center">
                    <h1 class="heading heading-h1 line-height-1-5">{{ setting('title_team') }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcaump Area -->


 <!-- Start Team Area -->
 <div class="brook-team-area bg_color--1 slick-arrow-hover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brook-element-carousel slick-arrow-center slick-arrow-rounded"
                    data-slick-options='{
                    "spaceBetween": 15, 
                    "slidesToShow": 3, 
                    "slidesToScroll": 1, 
                    "arrows": true, 
                    "infinite": true,
                    "dots": false,
                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "ion ion-ios-arrow-back" },
                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "ion ion-ios-arrow-forward" }
                }'
                    data-slick-responsive='[
                {"breakpoint":991, "settings": {"slidesToShow": 2}},
                {"breakpoint":690, "settings": {"slidesToShow": 2}},
                {"breakpoint":590, "settings": {"slidesToShow": 1}}
                ]'>
                    
                    @foreach ($teams as $team)
                    <!-- Start Single Team -->
                    <div class="team team__style--2 move-up wow" >
                        <div class="thumb">
                            <img src="{{ $team->image }}" alt="team Images">
                            <div class="overlay"></div>
                            <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                <li class="facebook"><a href="{{ $team->facebook }}" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li class="twitter"><a href="{{ $team->twitter }}" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="instagram"><a href="{{ $team->instagram }}" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="team-info">
                                <div class="info">
                                    <h5>{{ $team->name }}</h5>
                                    <span>{{ $team->title }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->


<div class="brook-testimonial-area poss_relative wavify-activation ptb--200 ptb-md--80 ptb-sm--60">
    <div class="wavify-wrapper">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
             data-wavify-height="140" data-wavify-background="rgba(245,245,245,0.5)" data-wavify-amplitude="80"
             data-wavify-bones="4">
            <path d="M 0 141.71042689406383 C 237.875 148.50471572578806 237.875 148.50471572578806 475.75 145.107571309926 C 713.625 141.71042689406383 713.625 141.71042689406383 951.5 165.82491752026056 C 1189.375 189.9394081464571 1189.375 189.9394081464571 1427.25 193.5786122514483 C 1665.125 197.21781635643944 1665.125 197.21781635643944 1903 165.82491752026056 L 1903 7389 L 0 7389 Z"
                  fill="rgba(245,245,245,0.5)"></path>
        </svg>

        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
             data-wavify-height="140" data-wavify-background="#f5f5f5" data-wavify-amplitude="80"
             data-wavify-bones="3">
            <path d="M 0 147.22020568980648 C 317.16666666666663 183.65559797623268 317.16666666666663 183.65559797623268 634.3333333333333 165.43790183301957 C 951.4999999999999 147.22020568980648 951.4999999999999 147.22020568980648 1268.6666666666665 200.09089320557024 C 1585.833333333333 252.96158072133412 1585.833333333333 252.96158072133412 1903 183.26276877337258 L 1903 7389 L 0 7389 Z"
                  fill="#f5f5f5"></path>
        </svg>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 text-center ptb-md--80 ptb-sm--80">
                <div class="brook-section-title text-start title-max-width plr_sm--50">
                    <h3 class="heading heading-h3">{{ setting('about_testimonial') }}</h3>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-12">
                <div class="row">
                    <!-- Start Single Testimonial -->
        @foreach ($testimonials as $testimonial)
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                        <div class="testimonial testimonial_style--1">
                            <div class="content">
                                <p class="bk_pra">“{{ $testimonial->desc }}”</p>
                                <div class="testimonial-info">
                                    <div class="post-thumbnail">
                                        <img src="{{$testimonial->image}}" alt="clint image">
                                    </div>
                                    <div class="clint-info">
                                        <h6>{{ $testimonial->name }}</h6>
                                        <span>{{$testimonial->title}}</span>
                                    </div>
                                </div>
                                <div class="testimonial-quote">
                                    <span class="fa fa-quote-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                    
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

    @include('website.call')
@endsection