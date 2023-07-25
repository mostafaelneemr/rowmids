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
                        <a class="tp-caption rev-btn smooth-scroll-link" href="#section-about" target="_self" id="slide-16-layer-24"
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                           data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                           data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                           data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                           data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                           data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                           style="z-index: 7; min-width: 160px; max-width: 160px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 16px; line-height: 55px; font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(255,255,255);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Explore Now </a>
                    </li>
                    @endforeach
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

@endsection
