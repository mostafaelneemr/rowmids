{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}






    <!DOCTYPE html>
<html lang="en">
<head>
    {{-- style css --}}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Login</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('backend/assets/images/favicon.ico') }}" type="image/x-icon"/>
    {{-- style --}}
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="{{asset('backend/assets/images/pre-loader/loader-01.svg')}}" alt="">
    </div>

    <!--=================================
     preloader -->

    <!--=================================
    login-->

    <section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url({{asset('backend/asset/images/login-bg.jpg')}});" >
        <div class="container">
            <div class="row justify-content-center no-gutters vertical-align">

                <div class="col-lg-4 col-md-6 login-fancy-bg bg" style="background-image: url({{asset('backend/asset/images/login-inner-bg.jpg')}});">
                    <div class="login-fancy">
                        <h2 class="text-white mb-20">Hello world!</h2>
                        <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
                        <ul class="list-unstyled  pos-bot pb-30">
{{--                            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>--}}
{{--                            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>--}}
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 bg-white">
                    <div class="login-fancy pb-40 clearfix">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <h3 class="mb-30">Sign In To Admin</h3>

                        <div class="section-field mb-20">
                            <label class="mb-10" for="email">Email  </label>
                            <input id="email" class="web form-control" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
                        </div>

                        <div class="section-field mb-20">
                            <label class="mb-10" for="Password">Password </label>
                            <input id="Password" class="Password form-control" type="password" name="password" required autocomplete="current-password">
                        </div>

                        <div class="section-field">
                            <div class="remember-checkbox mb-30">
                                <input type="checkbox" class="form-control" name="two" id="two" />
                                <label for="two"> Remember me</label>
                                <a href="password-recovery.html" class="float-right">Forgot Password?</a>
                            </div>

                        </div>
                        <button type="submit" class="button">Login <i class="fa fa-check"></i></button>

                        </form>
{{--                        <p class="mt-20 mb-0">Don't have an account? <a href="register.html"> Create one here</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     login-->

</div>



<!--=================================
 jquery -->

<script src="{{ URL::asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('backend/assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script type="text/javascript">var plugin_path = '{{ asset('backend/assets/js') }}/';</script>
<!-- chart -->
<script src="{{ URL::asset('backend/assets/js/chart-init.js') }}"></script>
{{-- <link href="{{ asset('backend/assets/css/fontawesome/js/all.js')}}" rel="stylesheet"> --}}
<!-- calendar -->
<script src="{{ URL::asset('backend/assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('backend/assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('backend/assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('backend/assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('backend/assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
<script src="{{ URL::asset('backend/assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('backend/assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('backend/assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('backend/assets/js/custom.js') }}"></script>

</body>
</html>





















