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
                        <img src="{{asset($slider->image)}}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
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

<div class="home-decoration-area bg_color--1">
    <div class="container-fluid">
        <div class="row align-items-center no-gutters">
            <div class="col-lg-6">
                <div class="thumbnail space_decLeft--170">
                    <img class="w-100" src="{{ setting('picture_service') }}" alt="Multipurpose">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home-decoration-inner lr-padding">
                    <div class="content">
                        <h2 class="heading heading-h2">{{ setting('header_service') }}</h2>
                        <div class="bkseparator--70"></div>
                        <h3 class="heading heading-h3 theme-color wow move-up">{{ setting('title_service') }}</h3>
                        <div class="content mt--20 mb--65">
                            <p class="bk_pra font-18 line-height-1-87 wow move-up">{{ setting('desc_service') }}</p>
                        </div>
                    </div>
                    <div class="basic-thine-line"></div>

                    <!-- Accordion Area -->
                    <div class="bk-accordion-style--2 mt--55 wow move-up" id="accordionExampl3">

                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <h5 class="mb-0">
                                    <a href="#" class="acc-btn" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                        aria-expanded="false" aria-controls="collapsesix">
                                        Minimal design
                                    </a>
                                </h5>
                            </div>

                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExampl3">
                                <div class="card-body">Lighting has the power to transform a room. From the
                                    way it casts a glow to the way it looks, there is a reason designers
                                    call it the jewelry of a room. Furthermore, lighting is probably the
                                    most easily recognizable and instantly iconic piece you can invest on.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Service Area -->
<div class="brook-service-area architecture-service-container">

    <!-- Start Bg Thumbnail -->
    <div class="architecture-bg-thumbnail">
        <div class="inner">
            <!-- Start Single Image -->
            <div class="architecture-hover-image active">
                <div class="bg-thumb bg-image--5"></div>
            </div>
            <!-- End Single Image -->

            <!-- Start Single Image -->
            <div class="architecture-hover-image">
                <div class="bg-thumb bg-image--2"></div>
            </div>
            <!-- End Single Image -->

            <!-- Start Single Image -->
            <div class="architecture-hover-image">
                <div class="bg-thumb bg-image--3"></div>
            </div>
            <!-- End Single Image -->

            <!-- Start Single Image -->
            <div class="architecture-hover-image">
                <div class="bg-thumb bg-image--4"></div>
            </div>
            <!-- End Single Image -->

        </div>
    </div>
    <!-- End Bg Thumbnail -->

    <div class="row">
        <!-- Start Single Service -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="architecture-service" data-image3="img/bg/bg-image-68.jpg">
                <div class="architecture-inner">
                    <div class="icon mb--25">
                        <img src="img/service/icon-box/home-architect-service-01-image.png" alt="Multipurpose">
                    </div>
                    <div class="content">
                        <h4 class="heading heading-h4 text-white">Planning Construction</h4>
                        <div class="bkseparator--20"></div>
                        <p class="bk_pra">Prepare a good construction plan to develop the budget and
                            schedule the work</p>
                        <div class="view-more-btn">
                            <a href="#"><span>More details</span> <span class="btn-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Service -->

        <!-- Start Single Service -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="architecture-service" data-image3="img/slider/type/bg-image-20.jpg">
                <div class="architecture-inner">
                    <div class="icon mb--25">
                        <img src="img/service/icon-box/home-architect-service-02-image.png" alt="Multipurpose">
                    </div>
                    <div class="content">
                        <h4 class="heading heading-h4 text-white">Landscape Architect</h4>
                        <div class="bkseparator--20"></div>
                        <p class="bk_pra">Analyze, plan, design, manage, and nurture the built and natural
                            environments.</p>
                        <div class="view-more-btn">
                            <a href="#"><span>More details</span> <span class="btn-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Service -->

        <!-- Start Single Service -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="architecture-service" data-image3="img/slider/type/bg-image-21.jpg">
                <div class="architecture-inner">
                    <div class="icon mb--25">
                        <img src="img/service/icon-box/home-architect-service-03-image.png" alt="Multipurpose">
                    </div>
                    <div class="content">
                        <h4 class="heading heading-h4 text-white">Urban Design</h4>
                        <div class="bkseparator--20"></div>
                        <p class="bk_pra">Include designing and shaping the physical features of cities,
                            towns and buildings.</p>
                        <div class="view-more-btn">
                            <a href="#"><span>More details</span> <span class="btn-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Service -->

        <!-- Start Single Service -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="architecture-service" data-image3="img/slider/type/bg-image-22.jpg">
                <div class="architecture-inner">
                    <div class="icon mb--25">
                        <img src="img/service/icon-box/home-architect-service-04-image.png" alt="Multipurpose">
                    </div>
                    <div class="content">
                        <h4 class="heading heading-h4 text-white">Infrastructure Analysis</h4>
                        <div class="bkseparator--20"></div>
                        <p class="bk_pra">Provide analyses of infrastructure and other essential
                            constructional conditions.</p>
                        <div class="view-more-btn">
                            <a href="#"><span>More details</span> <span class="btn-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Service -->

    </div>
</div>
<!-- End Service Area -->

    @include('website.call')

@endsection