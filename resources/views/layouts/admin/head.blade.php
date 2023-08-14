{{-- style css --}}

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>
@yield('css')

<!-- favicon -->
<link rel="shortcut icon" href="{{ URL::asset('backend/assets/images/favicon.ico') }}" type="image/x-icon"/>
{{-- style --}}
<link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">
{{--<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">--}}

