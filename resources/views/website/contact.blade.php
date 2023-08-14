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

                        <li data-index="rs-16" data-transition="curtain-1,curtain-3,curtain-2" data-slotamount="default,default,default,default"
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
                {{-- <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> --}}
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>

    <div class="contact-modern pb--120 pb_md--80 pb_sm--80">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-12 pr--50 ptb-md--80 ptb-sm--80">
                    <div class="contact-modern bg_color--18 space_dec--100 pt--120 pb--120 pl--60 pr--60">
                        <div class="inner">
                            <h2 class="heading heading-h2 text-white">{{ setting('contact_header') }}</h2>

                            <div class="classic-address text-start mt--60">
                                <h4 class="heading heading-h4 text-white">{{ setting('contact_title') }}</h4>
                                <div class="desc mt--15">
                                    <p class="bk_pra line-height-2-22 text-white">{{ setting('address') }}</p>
                                </div>
                            </div>

                            <div class="classic-address text-start mt--60">
                                <h4 class="heading heading-h4 text-white">Message us</h4>
                                <div class="desc mt--15 mb--30">
                                    <p class="bk_pra line-height-2-22 text-white">{{ setting('email') }} <br> {{ setting('phone') }} </p>
                                </div>
                                <div class="social-share social--transparent text-white">
                                    <a href="{{ setting('facebook') }}"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session('message')}}
                    </div>
                @endif

                <div class="col-lg-6 col-12 pl--50">
                    <div class="contact-form">
                        <form name="contactForm" action="{{route('sendmail')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input name="name" id="name" type="text" placeholder="Name *">
                                    @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-lg-12 mt--30">
                                    <input name="email" id="email" type="email" placeholder="Email *">
                                    @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-lg-12 mt--30">
                                    <input type="text" id="phone" name="phone" placeholder="Phone number">
                                    @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-lg-12 mt--30">
                                    <textarea name="message" id="message" placeholder="Your message"></textarea>
                                </div>


                                <div class="col-lg-12 mt--30">
                                    <button type="submit" value="submit form" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
