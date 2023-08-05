@extends('layouts.website.master')

@section('style')

    <style>
    .portfolio-bg{
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-size: cover;
        background-position: center;
    }
    </style>

@endsection

@section('content')

<div class="slider-revoluation">
    <div id="rev_slider_10_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-minimal-portfolio"
        data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_10_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-20" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/revoulation/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff'
                        alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption  rev_group" id="slide-20-layer-6" data-x="['right','right','right','center']"
                        data-hoffset="['15','-70','-70','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['30','30','30','140']" data-width="300" data-height="40" data-whitespace="nowrap"
                        data-visibility="['off','off','off','on']" data-type="group" data-basealign="slide"
                        data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 300px; max-width: 300px; max-width: 40px; max-width: 40px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <!-- LAYER NR. 2 -->
                        <a class="tp-caption " href="{{ setting('facebook') }}" target="_self" id="slide-20-layer-7"
                            data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-actions='' data-responsive_offset="off"
                            data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0.3","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,56,227);bc:rgb(0,56,227);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 21px; font-weight: 400; color: #999999; letter-spacing: 0px;border-color:rgba(255,255,255,0);border-style:solid;border-width:0px 0px 1px 0px;cursor:pointer;text-decoration: none;">Facebook
                        </a>

                        <!-- LAYER NR. 3 -->
                        <a class="tp-caption  " href="{{ setting('twitter') }}" target="_self" id="slide-20-layer-8"
                            data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="text" data-actions=''
                            data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0.3","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,56,227);bc:rgb(0,56,227);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[,,,]"
                            data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 21px; font-weight: 400; color: #999999; letter-spacing: 0px;border-color:rgba(0,56,227,0);border-style:solid;border-width:0px 0px 1px 0px;cursor:pointer;text-decoration: none;">Twitter
                        </a>

                        <!-- LAYER NR. 4 -->
                        <a class="tp-caption  " href="{{ setting('instagram') }}" target="_self" id="slide-20-layer-9"
                            data-x="['left','left','left','left']" data-hoffset="['205','205','205','205']"
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="text" data-actions=''
                            data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0.3","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,56,227);bc:rgb(0,56,227);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" style="z-index: 12; white-space: nowrap; font-size: 16px; line-height: 21px; font-weight: 400; color: #999999; letter-spacing: 0px;border-color:rgba(255,255,255,0);border-style:solid;border-width:0px 0px 1px 0px;cursor:pointer;text-decoration: none;">Instagram
                        </a>
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption     rev_group" id="slide-20-layer-12" data-x="['right','right','right','right']"
                        data-hoffset="['15','-70','-70','-309']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['30','30','30','111']" data-width="300" data-height="40" data-whitespace="nowrap"
                        data-visibility="['on','on','on','off']" data-type="group" data-basealign="slide"
                        data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;rZ:90;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]" style="z-index: 14; min-width: 300px; max-width: 300px; max-width: 40px; max-width: 40px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption  " href="{{ setting('facebook') }}" target="_self" id="slide-20-layer-13"
                            data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-actions='' data-responsive_offset="off"
                            data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0.3","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,56,227);bc:rgb(0,56,227);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" style="z-index: 15; white-space: nowrap; font-size: 16px; line-height: 21px; font-weight: 400; color: #999999; letter-spacing: 0px;border-color:rgba(255,255,255,0);border-style:solid;border-width:0px 0px 1px 0px;cursor:pointer;text-decoration: none;">Facebook
                        </a>

                        <!-- LAYER NR. 7 -->
                        <a class="tp-caption  " href="{{ setting('twitter') }}" target="_self" id="slide-20-layer-14"
                            data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="text" data-actions=''
                            data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0.3","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,56,227);bc:rgb(0,56,227);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[,,,]"
                            data-paddingleft="[0,0,0,0]" style="z-index: 16; white-space: nowrap; font-size: 16px; line-height: 21px; font-weight: 400; color: #999999; letter-spacing: 0px;border-color:rgba(0,56,227,0);border-style:solid;border-width:0px 0px 1px 0px;cursor:pointer;text-decoration: none;">Twitter
                        </a>

                        <!-- LAYER NR. 8 -->
                        <a class="tp-caption  " href="{{ setting('instagram') }}" target="_self" id="slide-20-layer-15"
                            data-x="['left','left','left','left']" data-hoffset="['205','205','205','205']"
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="text" data-actions=''
                            data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0.3","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,56,227);bc:rgb(0,56,227);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" style="z-index: 17; white-space: nowrap; font-size: 16px; line-height: 21px; font-weight: 400; color: #999999; letter-spacing: 0px;border-color:rgba(255,255,255,0);border-style:solid;border-width:0px 0px 1px 0px;cursor:pointer;text-decoration: none;">Instagram
                        </a>
                    </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption  " id="slide-20-layer-1" data-x="['center','left','left','center']"
                        data-hoffset="['200','40','40','0']" data-y="['top','middle','middle','middle']"
                        data-voffset="['180','30','40','0']" data-fontsize="['80','68','56','44']"
                        data-lineheight="['107','91','75','59']" data-width="['700','570','510','370']"
                        data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                        data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 700px; max-width: 700px; white-space: normal; 
                        font-size: 80px; line-height: 107px; font-weight: 700; color: #222222; letter-spacing: 0px;">{{ setting('portfolio_text') }}</div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption tp-shape tp-shapewrapper " id="slide-20-layer-11" data-x="['left','left','left','center']"
                        data-hoffset="['151','40','40','0']" data-y="['top','middle','middle','middle']"
                        data-voffset="['245','-150','-150','-120']" data-width="['494','494','494','270']"
                        data-height="2" data-whitespace="normal" data-type="shape" data-basealign="slide"
                        data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 13;background-color:rgb(34,34,34);">
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>


 <!-- Start Portfolio Area -->
 <div class="brook-portfolio-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1 basic-thine-line">
    <div class="container">
        <div class="row row--3">
            <div class="col-lg-12 mb--60">
                <div class="brook-section-title text-center">
                    {{-- <h3 class="heading heading-h3 mb--30">Style Parallax</h3> --}}
                </div>
            </div>

            <div class="paralax-grid">
                <!-- Start Single Portfolio -->
                @foreach ($galleries as $gallery)
                <div class="single-paralax">
                    <div class="paralax-portfolio" data-tilt>
                        <div class="portfolio-bg" style="background-image: url('{{ $gallery->image }}')"></div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Portfolio -->

            </div>

        </div>
    </div>
</div>
<!-- End Portfolio Area -->


    @include('website.call')

@endsection