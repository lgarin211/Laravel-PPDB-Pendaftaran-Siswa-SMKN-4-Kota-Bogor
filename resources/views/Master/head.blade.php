<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>@yield('page_title', setting('site.title'))</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{ url('/mobilekit1/') }}/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="{{ url('/mobilekit1/') }}/180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="{{ url('/mobilekit1/') }}/assets/css/style.css">
    <link rel="manifest" href="{{ url('/mobilekit1/') }}/__manifest.json">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
	@include('Master/loader')
	<!-- App Header -->
	    <div class="appHeader bg-primary text-light">
	        <div class="left">
	            <a href="{{ url()->previous() }}" class="headerButton goBack">
	                <ion-icon name="chevron-back-outline"></ion-icon>
	            </a>
	        </div>
	        <div class="pageTitle">
                <img src="https://ppdb.smkn4bogor.sch.id/storage/posts/June2022/ttkkMzvAMdVfJEOUo3BF.png" style="width: 50px;">
            </div>
	        <div class="right"></div>
	    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section full mt-2">
            <div class="section-title text-center">
                {{-- {{setting('site.title')}} --}}
            </div>
            <div class="wide-block pt-2 pb-2">
                @yield('content')      
                <hr>
                <div class="card">      
                    {{-- @yield('c2') --}}
                </div>
            </div>
        </div>
    </div>