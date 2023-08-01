@extends('layouts.website.master')

@section('content')

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
                             style="z-index: 6; min-width: 1180px; max-width: 1180px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">{{ $slider->desc }} </div>

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
    </div>

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
                        <h3 class="heading heading-h3">Feedbacks <br>from our<br> clients.</h3>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        @foreach ($testimonials as $testimonial)
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
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

    @include('website.call')

@endsection
