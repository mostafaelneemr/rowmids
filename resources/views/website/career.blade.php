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


<div class="container">
    <div class="row">


        <!-- Start Single Career -->
        @foreach ($careers as $career)
        <div class="col-lg-6 col-md-6 col-12 mt-2">
            <div class="career mb--30">
                <div class="inner">
                    
                    <div class="title">
                        <h3 class="heading heading-h3" style="color: #f08833f2" >{{ $career->title }}</h3>
                    </div>

                    <div class="content mt--35">
                        <h6 class="heading heading-h6">ABOUT</h6>
                        <div class="desc mt--25">
                            <p class="bk_pra">Location: {{ $career->location }}</p>
                            <div class="bkseparator--25"></div>
                            <p class="bk_pra">{{ $career->desc }}</p>
                        </div>
                    </div>

                    <div class="career-list mt--65">
                        <h6 class="heading heading-h6">REQUIREMENTS</h6>
                        <!-- Start Single List -->
                        <div class="bk-list--2 move-up wow mt--35">
                                <div class="marker dark-color"></div>
                                <div class="title-wrap">
                                    <h6 class="heading heading-h5">{!! $career->req !!}</h6>
                                </div>
                        </div>
                           

                    </div>
                        <!-- End Single List -->
                        <div class="career-btn mt--60">
                            <a class="brook-btn bk-btn-dark btn-sd-size btn-rounded space-between" href="mailto:{{ setting('email') }}">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Single Career -->

</div>

    @include('website.call')

@endsection