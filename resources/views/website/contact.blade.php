@extends('layouts.website.master')

@section('title')
    econce - contact
@endsection

@section('content')

    @foreach ($sliders as $slider)
    <div class="brook-breadcaump-area pt--300 pt_md--250 pt_sm--200 pb--300 pb_md--250 pb_sm--200 bg_image--55 breadcaump-title-bar breadcaump-title-white" 
    style="background-image: url('{{ $slider->image }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcaump-inner text-center">
                        <h2 class="heading heading-h2 font-60 text-white">{{ $slider->title }}</h2>
                        {{-- <p class="heading heading-h2 font-60 text-white">{{ $slider->sub_title }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="contact-modern pb--120 pb_md--80 pb_sm--80" style="margin-top: 120px">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-12 pr--50 ptb-md--80 ptb-sm--80">
                    <div class="contact-modern bg_color--18 space_dec--100 pt--120 pb--120 pl--60 pr--60" style="background-image: url('{{ setting('contact_bg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
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
                                    <p class="bk_pra line-height-2-22 text-white"><a class="text-white" href="mailto:{{ setting('email') }}">{{ setting('email') }}</a> <br> <a class="text-white" href="https://wa.me/{{ setting('phone') }}">{{ setting('phone') }}</a> </p>
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



