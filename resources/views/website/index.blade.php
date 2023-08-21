@extends('layouts.website.master')

@section('content')


<div class="slider-revoluation">
    <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-start-ups"
        data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_6_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
            <ul>
                <!-- SLIDE  -->
                @foreach($sliders as $slider)                    
                <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="{{ $loop->iteration }}" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ $slider->image }}" alt="" data-bgposition="left center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <h2 class="tp-caption " id="slide-12-layer-6" data-x="['left','center','center','center']"
                        data-hoffset="['80','0','0','0']" data-y="['middle','top','top','top']" data-voffset="['-114','100','100','100']"
                        data-fontsize="['55','47','39','31']" data-lineheight="['77','66','55','44']"
                        data-width="['500','430','360','300']" data-height="['none','133','none','89']"
                        data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off"
                        data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 500px; max-width: 500px; white-space: normal; font-size: 55px; line-height: 77px; font-weight: 600; color: #222222; letter-spacing: 0px;">{{ $slider->title }}</h2>

                    <!-- LAYER NR. 3 -->
                    <h4 class="tp-caption  startups-pra" id="slide-12-layer-7" data-x="['left','center','center','center']"
                        data-hoffset="['80','0','0','0']" data-y="['middle','top','top','top']" data-voffset="['33','260','240','240']"
                        data-fontsize="['20','20','18','16']" data-lineheight="['40','40','36','32']"
                        data-width="['500','500','400','360']" data-height="none" data-whitespace="normal"
                        data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 500px; max-width: 500px; white-space: normal; font-size: 20px; line-height: 40px; font-weight: 500; color: #999999; letter-spacing: 0px;"> {{ $slider->sub_title }} </h4>
                        {{-- <p> {{ $slider->desc }} </p> --}}

                    <!-- LAYER NR. 4 -->
                    <a class="tp-caption rev-btn " href="{{setting('slider_link')}}" id="slide-12-layer-8" data-x="['left','center','center','center']"
                        data-hoffset="['80','0','0','0']" data-y="['middle','top','top','top']" data-voffset="['157','380','360','360']"
                        data-width="182" data-height="62" data-whitespace="nowrap" data-type="button"
                        data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1400,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(248,164,64);bg:rgba(248,164,64,0);"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                        style="z-index: 8; min-width: 182px; max-width: 182px; max-width: 62px; max-width: 62px; white-space: nowrap; font-size: 14px; line-height: 60px; font-weight: 600; color: rgba(255,255,255,1); background-color:rgb(248,164,64);border-color:rgb(248,164,64);border-style:solid;border-width:1px 1px 1px 1px;border-radius:40px 40px 40px 40px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">{{ setting('slider_button') }}</a>
                </li>
                @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>

{{-- 
    <div class="slider-revoluation">
        <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-authentic-studio"
             data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
            <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">

                <ul>
                    <!-- SLIDE  -->
                @foreach($sliders as $slider)
                    <li data-slotamount="default,default,default,default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default,default,default,default" data-easeout="default,default,default,default"
                        data-masterspeed="default,default,default,default" data-thumb="img/revoulation/100x50_slider-authentic-studio-slide-02-bg.jpg"
                        data-rotate="0,0,0,0" data-saveperformance="off" data-title="Slide" data-param1="{{ $loop->iteration }}"
                        data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                        data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset($slider->image)}}" alt="" data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <h6 class="tp-caption tp-resizeme" id="slide-16-layer-26" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-160','-160','-160','-100']" data-fontsize="['18','18','16','14']"
                            data-width="['470','470','400','360']" data-height="none" data-whitespace="normal"
                            data-type="text" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; min-width: 470px; max-width: 470px; white-space: normal; font-size: 18px; line-height: 33px; font-weight: 700; color: #ffffff; letter-spacing: 3px;text-transform:uppercase;">{{ $slider->title }} </h6>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" id="slide-16-layer-1" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-25','-28','-28','-10']" data-fontsize="['80','60','45','30']"
                             data-lineheight="['90','67','50','34']" data-width="['1180','817','620','380']"
                             data-height="['none','135','none','none']" data-whitespace="normal" data-type="text"
                             data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             style="z-index: 6; min-width: 1180px; max-width: 1180px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">{{ $slider->sub_title }} </div>

                        <!-- LAYER NR. 3 -->
                        <a class="tp-caption rev-btn smooth-scroll-link" href="{{ setting('slider_link') }}" target="_self" id="slide-16-layer-24"
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                           data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                           data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                           data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                           data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                           style="z-index: 7; min-width: 160px; max-width: 160px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 16px; line-height: 55px; font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(255,255,255);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ setting('slider_button') }} </a>
                    </li>
                    @endforeach
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div> --}}

    <!-- Service Area Start -->
<div class="service-area bg_color--5 ptb--150 ptb-md--80 ptb-sm--60" id="aboutus">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-lg-6 col-12">
                <div class="bk-title--default text-start">
                    <h1 class="theme-color fw-500" style="font-weight: bold; color: #314550; font-size: 61px;">{{ setting('title') }}</h1>
                    <div class="bkseparator--30"></div>
                    <h3 class="heading-40 fw-200" style="font-size: 30px;">{{ setting('digital_title') }}</h3>
                </div>
            </div>
            <div class="col-lg-6 col-12 mt_md--30 mt_sm--30">
                <div class="modern-service-content wow move-up">
                    <p>{{ setting('digital_description') }}</p>
                </div>
            </div>
        </div>
        <div class="row mt--100 mt_md--50 mt_sm--30">

            @foreach($digitals as $digital)
            <!-- Single SVG Icon Box Start -->
            <div class="col-xl-4 col-lg-6 col-md-6 mb_lg--30 mb_md--30 mb_sm--30">
                <div class="single-svg-icon-box">
                    <div class="grid-overlay" style="background-image: url('{{ $digital->image }}')"></div>
                    <div class="inner">
                        <div class="icon mb--25">
                            <img src="{{ $digital->icon }}" alt="Multipurpose">
                        </div>                        
                        <div class="content">
                            <h5 class="heading heading-h5"> {{ $digital->title }}</h5>
                            <p>{{ $digital->desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single SVG Icon Box End -->
            @endforeach


        </div>
    </div>
</div>
<!-- Service Area End -->

  <!-- Start Breadcaump Area -->
  {{-- <div class="brook-breadcaump-area pt--130 pb--145 bg_color--1 breadcaump-title-bar">
    <div class="container-fluid plr--150 plr_sm--20">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcaump-inner text-center">
                    <h1 class="heading heading-h1 line-height-1-5">{{ setting('title_team') }}</h1>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Breadcaump Area -->

 <!-- Start Team Area -->
 {{-- <div class="brook-team-area bg_color--1 slick-arrow-hover">
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
</div> --}}
<!-- End Team Area -->


 <!-- Start Portfolio Area -->
 {{-- <div class="brook-portfolio-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1 basic-thine-line"> --}}
    {{-- <div class="container"> --}}
        {{-- <div class="row row--3"> --}}
            {{-- <div class="col-lg-12 mb--60"> --}}
                {{-- <div class="brook-section-title text-center"> --}}
                    {{-- <h3 class="heading heading-h3 mb--30">Style Parallax</h3> --}}
                {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="paralax-grid"> --}}
                <!-- Start Single Portfolio -->
                {{-- @foreach ($galleries as $gallery) --}}
                {{-- <div class="single-paralax"> --}}
                    {{-- <div class="paralax-portfolio" data-tilt> --}}
                        {{-- <div class="portfolio-bg" style="background-image: url('{{ $gallery->image }}')"></div> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
                {{-- @endforeach --}}
                <!-- End Single Portfolio -->

            {{-- </div> --}}

        {{-- </div> --}}
    {{-- </div> --}}
{{-- </div> --}}
<!-- End Portfolio Area -->


    <div class="brook-testimonial-area poss_relative wavify-activation ptb--200 ptb-md--80 ptb-sm--60" id="testimonial">
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
                        <h3 class="heading heading-h3" style="font-weight: bold; color: #314550; font-size: 40px;">{{ setting('about_testimonial') }}</h3>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        @foreach ($testimonials as $testimonial)
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                            <div class="testimonial testimonial_style--1">
                                <div class="content">
                                    <p class="bk_pra">“{{ $testimonial->desc }}”</p>
                                    <div class="testimonial-info">
                                        <div class="post-thumbnail">
                                            <img src="{{$testimonial->image}}" alt="clint image">
                                        </div>
                                        <div class="clint-info">
                                            <h6>{{$testimonial->name}}</h6>
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




    <section class="bg_color--5">
    <div class="container">
        <div class="row align-content-center ">
            <div class="col-lg-6 col-12">
                <div class="bk-title--default text-start">
                    <h1 class="theme-color fw-500 py-2" style="font-weight: bold; color: #314550; font-size: 61px;">{{ setting('title_service') }}</h1>
                </div>
            </div>
        </div>
    </div>
    </section>
                <!-- Start Service Area -->
                @foreach ($pictures as $picture)
                <div class="brook-service-area architecture-service-container" id="service" style="background-image : url('{{ $picture->image }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                    
                    <!-- Start Bg Thumbnail -->
                    <div class="architecture-bg-thumbnail">
                        <div class="inner">
                            <!-- Start Single Image -->
                            <div class="architecture-hover-image active">
                                <div class="bg-thumb"></div>
                            </div>
                            <!-- End Single Image -->    
                        </div>
                    </div>
                    <!-- End Bg Thumbnail -->
                    
                    @foreach($architectures as $architecture)
                        
                    <div class="row">
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="architecture-service" data-image3="{{ $picture->image }}">
                                <div class="architecture-inner">
                                    <div class="icon mb--25">
                                        <img src="{{ $architecture->icon }}" alt="Multipurpose">
                                    </div>
                                    <div class="content">
                                        <h4 class="heading heading-h4 text-white">{{ $architecture->title }}</h4>
                                        <div class="bkseparator--20"></div>
                                        <p class="bk_pra">{{ $architecture->desc }}</p>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Service -->
    
                    </div>
                </div>
                @endforeach
                <!-- End Service Area -->

    
{{-- <section class="height-auto pb_sm--0" data-skin="black">
    <div class="presentation-slider-wrapper">
        <div class="presentation-inner">
            <div class="inner brand-inner w-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="bk-title--default text-start brook-section-title-business">
                                <h5>{{ setting('title_brand') }}</h5>
                                <h3 class="fw-200">{{ setting('header_brand') }}</h3>
                                <div class="separator"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt--60 mt_md--50 mt_sm--30">
                        <div class="col-lg-12">
                            <div class="brand-wrapper">
                                <div class="brand__list brand-default brand-style--2 brand-business">
                                    @foreach ($brands as $brand)
                                    <div class="brand"><a href="#"><img src="{{ $brand->image }}" alt="logo image"></a> </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    @include('website.call')

@endsection
