<!-- Footer -->
<footer id="bk-footer" class="page-footer bg_color--3 pl--150 pr--150 pl_lg--30 pr_lg--30 pl_md--30 pr_md--30 pl_sm--5 pr_sm--5">
    <!-- Start Footer Top Area -->
    <div class="bk-footer-inner pt--150 pb--30 pt_sm--100">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget text-var--2">
                        <div class="logo">
                            <a href="#"> 

                                {{-- <img src="{{ img(setting('site_logo')) }}" alt=""> --}}
                                @if(!empty($site_logo = \App\Models\admin\Setting::where('name','site_logo')->value('value')))
				<img alt="Logo" src="{{ $site_logo}}" style="width: 100%;" />
			@else
				<img alt="Logo" src="{{ url('public/Logo-PNG_3.png')}}" style="width: 100%;" />
			@endif

                            </a>
                            
                        </div>
                        <div class="footer-inner">
                            <p>Brook is a multi-purpose WordPress theme for big and small-sized businesses. Enjoy the theme's original design, functional features & responsive layouts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt_mobile--40">
                    <div class="footer-widget text-var--2 menu--about" style="line-height: 0;">
                        <h2 class="widgettitle">Home</h2>
                        <div class="footer-menu">
                            <ul class="ft-menu-list bk-hover">
                                <li><a href="{{ route('about') }}">about_us</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="{{ route('service') }}">service</a></li>
                                <li><a href="{{ route('contact') }}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt_mobile--40">
                    <div class="footer-widget text-var--2 menu--about" style="line-height: 0;">
                        <h2 class="widgettitle">About us</h2>
                        <div class="footer-menu">
                            <ul class="ft-menu-list bk-hover">
                                <li><a href="{{ route('about') }}">about_us</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="{{ route('service') }}">service</a></li>
                                <li><a href="{{ route('contact') }}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                    <div class="footer-widget text-var--2 menu--contact">
                        <h2 class="widgettitle">contact</h2>
                        <div class="footer-address">
                            <div class="bk-hover">
                                <p>{{ setting('address') }}</p>
                                <p><a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a></p>
                                <p><a href="https://wa.me/{{ setting('phone') }}">{{ setting('phone') }}</a></p>
                            </div>
                            <div class="social-share social--transparent text-white">
                                <a href="{{ setting('facebook') }}" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="{{ setting('twitter') }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="{{ setting('instagram') }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                {{-- <a href="#" target="_blank"><i class="fab fa-dribbble"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                    <div class="footer-widget text-var--2 menu--instagram">
                        <h2 class="widgettitle">Instagram</h2>

                        <div class="ft-instagram-list">

                            <div class="instagram-grid-wrap">
                                <!-- Start Single Instagram -->
                                <div class="item-grid grid-style--1">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('website/img/instagram/instagram-1/instagram-7.jpg')}}" alt="instagram images">
                                        </a>
                                        <div class="item-info">
                                            <div class="inner">
                                                <a href="#"><i class="fas fa-heart"></i>1k</a>
                                                <a href="#"><i class="fas fa-comment-dots"></i>9</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Instagram -->

                                <!-- Start Single Instagram -->
                                <div class="item-grid grid-style--1">
                                    <div class="thumb">
                                        <a href="#"> <img src="{{asset('website/img/instagram/instagram-1/instagram-8.jpg')}}" alt="instagram images"> </a>
                                        <div class="item-info">
                                            <div class="inner">
                                                <a href="#"><i class="fas fa-heart"></i>1k</a>
                                                <a href="#"><i class="fas fa-comment-dots"></i>9</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Instagram -->

                                <!-- Start Single Instagram -->
                                <div class="item-grid grid-style--1">
                                    <div class="thumb">
                                        <a href="#"> <img src="{{asset('website/img/instagram/instagram-1/instagram-9.jpg')}}" alt="instagram images"> </a>
                                        <div class="item-info">
                                            <div class="inner">
                                                <a href="#"><i class="fas fa-heart"></i>1k</a>
                                                <a href="#"><i class="fas fa-comment-dots"></i>9</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Instagram -->

                                <!-- Start Single Instagram -->
                                <div class="item-grid grid-style--1">
                                    <div class="thumb">
                                        <a href="#"> <img src="{{asset('website/img/instagram/instagram-1/instagram-10.jpg')}}" alt="instagram images"> </a>
                                        <div class="item-info">
                                            <div class="inner">
                                                <a href="#"><i class="fas fa-heart"></i>1k</a>
                                                <a href="#"><i class="fas fa-comment-dots"></i>9</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Instagram -->

                                <!-- Start Single Instagram -->
                                <div class="item-grid grid-style--1">
                                    <div class="thumb">
                                        <a href="#"> <img src="{{asset('website/img/instagram/instagram-1/instagram-11.jpg')}}" alt="instagram images"> </a>
                                        <div class="item-info">
                                            <div class="inner">
                                                <a href="#"><i class="fas fa-heart"></i>1k</a>
                                                <a href="#"><i class="fas fa-comment-dots"></i>9</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Instagram -->

                                <!-- Start Single Instagram -->
                                <div class="item-grid grid-style--1">
                                    <div class="thumb">
                                        <a href="#"> <img src="{{asset('website/img/instagram/instagram-1/instagram-12.jpg')}}" alt="instagram images"> </a>
                                        <div class="item-info">
                                            <div class="inner">
                                                <a href="#"><i class="fas fa-heart"></i>1k</a>
                                                <a href="#"><i class="fas fa-comment-dots"></i>9</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Instagram -->

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Start Footer Top Area -->

    <!-- Start Copyright Area -->
    <div class="copyright ptb--50 text-var-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright-left text-md-start text-center">
                        <ul class="bk-copyright-menu d-flex bk-hover justify-content-center justify-content-md-start flex-wrap flex-sm-nowrap">
                            <li><a href="{{ route('about') }}">about</a></li>
                            <li><a href="{{ route('service') }}">service</a></li>
                            <li><a href="{{ route('contact') }}">contact_us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright-right text-md-end text-center">
                        <p>{{ setting('copyright') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
</footer>
<!--// Footer -->