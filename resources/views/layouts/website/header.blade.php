{{-- header  --}}
<header class="br_header header-default header-transparent header-bar position-from--top light-logo--version haeder-fixed-width haeder-fixed-150 headroom--sticky header-mega-menu clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header__wrapper">
                    <!-- Header Left -->
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                @if(!empty($site_logo = \App\Models\admin\Setting::where('name','site_logo')->value('value')))
				<img alt="Logo" src="{{ $site_logo}}" style="width: 100%;" />
			@else
				<img alt="Logo" src="{{ url('public/Logo-PNG_3.png')}}" style="width: 100%;" />
			@endif
                            </a>
                        </div>
                    </div>
                    <!-- Mainmenu Wrap -->
                    
                    <!-- Header Right -->
                    <div class="header-right">
                        <!-- Start Popup Search Wrap -->
                        {{-- <div class="popup-search-wrap">
                            <a class="btn-search-click" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div> --}}
    
                        
                      
    
                        <!-- Start Hamberger -->
                        <div class="manu-hamber hamberger-trigger light-version d-none d-xl-block">
                            <div>
                                <i></i>
                            </div>
                        </div>
                        <!-- End Hamberger -->
    
                         <!-- Start Hamberger -->
                         <div class="manu-hamber popup-mobile-click d-block light-version d-block d-xl-none">
                            <div>
                                <i></i>
                            </div>
                        </div>
                        <!-- End Hamberger -->
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    {{-- end header --}}