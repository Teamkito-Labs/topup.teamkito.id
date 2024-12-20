<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') {{ config('app.name') }}</title>
        <meta name="description" content="@yield('description')">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Teamkito Labs">

        <meta property="og:title" content="@yield('title') {{ config('app.name') }}">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:image" content="{{ asset('storage/img/masuk/masuk-topup-teamkito-id.png') }}">
        <meta property="og:url" content="">
        <meta property="og:type" content="website">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title') {{ config('app.name') }}">
        <meta name="twitter:description" content="@yield('description')">
        <meta name="twitter:image" content="{{ asset('storage/img/masuk/masuk-topup-teamkito-id.png') }}">
        <meta name="twitter:site" content="@teamkitoid">

        <link rel="canonical" href="URL Kananonis">

        <link rel="icon" href="{{ asset('storage/img/core-img/favicon.png') }}" type="image/x-icon">

        <!-- Master Stylesheet CSS -->
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="{{ asset('auth.css') }}">

        <!-- Tambahan Stylesheet CSS -->
        @stack('styles')

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="preloader-area">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="main-content-">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-5 px-0">
                        <!-- Middle Box -->
                        <div class="middle-box py-0 full-height d-flex align-items-center">
                            <div class="card full-height w-100">
                                <div class="card-body p-0">
                                    <div class="border-bottom">
                                        <div x-data>
                                            <i @click="window.history.back()"  class="fa fa-chevron-left pl-4 py-3"></i>
                                        </div>
                                    </div>
                                    <div class="px-5 pt-4">
                                        {{ $slot }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Plugins Js -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bundle.js') }}"></script>

        <!-- Active JS -->
        <script src="{{ asset('js/canvas.js') }}"></script>
        <script src="{{ asset('js/collapse.js') }}"></script>
        <script src="{{ asset('js/settings.js') }}"></script>
        <script src="{{ asset('js/template.js') }}"></script>
        <script src="{{ asset('js/default-assets/active.js') }}"></script>

        <!-- Tambahan Js -->
        @stack('scripts')
    </body>
</html>
