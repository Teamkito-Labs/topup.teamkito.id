<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') Top Up Game Murah dan Cepat di {{ config('app.name') }}</title>
    <meta name="description" content="@yield('description')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="noindex, nofollow">
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
    <link rel="stylesheet" href="{{ asset('nav-sidebar/style.css') }}">

    <!-- Tambahan Stylesheet CSS -->
    @stack('styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
<body>
    <!-- Preloader -->
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->
    <div class="main-container-wrapper">
        <!-- Top bar area -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route('beranda') }}"><img
                        src="{{ asset('storage/img/core-img/logo.png') }}" class="mr-2 img-fluid" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('beranda') }}"><img
                        src="{{ asset('storage/img/core-img/small-logo.png') }}" class="img-fluid" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item app-search d-none d-md-block">
                        <form role="search" class=""><input type="text" placeholder="Search..." class="form-control">
                            <button type="submit" class="search-btn mr-0"><i class="fa fa-search"></i></button></form>
                    </li>
                </ul>
                <ul class="top-navbar-area navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-primary">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Code problem solved.</h6>
                                    <p class="mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>New theme update.</h6>
                                    <p class="mb-0">
                                        02 days ago
                                    </p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Awsome support.</h6>
                                    <p class="mb-0">
                                        02 days ago
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-danger">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Text to build on the card title.</h6>
                                    <p class="mb-0">
                                        03 days ago
                                    </p>
                                </div>
                            </a>

                        </div>
                    </li>

                    <li class="nav-item nav-profile dropdown dropdown-animate">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top"
                            aria-labelledby="profileDropdown">
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon"
                                    aria-hidden="true"></i> My profile</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon"
                                    aria-hidden="true"></i> Messages</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon"
                                    aria-hidden="true"></i> Settings</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="ti-unlink profile-icon" aria-hidden="true"></i>
                                    Sign-out
                                </a>
                            </form>

                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center pr-0" type="button"
                    data-toggle="offcanvas">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-menu text-primary">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- Side Menu area -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bar-chart-2 link-icon">
                                <line x1="18" y1="20" x2="18" y2="10"></line>
                                <line x1="12" y1="20" x2="12" y2="4"></line>
                                <line x1="6" y1="20" x2="6" y2="14"></line>
                            </svg>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#transaksi" aria-expanded="false"
                            aria-controls="advanced">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-repeat link-icon">
                                <polyline points="17 1 21 5 17 9"></polyline>
                                <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                                <polyline points="7 23 3 19 7 15"></polyline>
                                <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                            </svg>
                            <span class="menu-title">Transaksi</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="transaksi">
                            <ul class="nav flex-column mt-0">
                                <li class="nav-item pl-4"> <a class="nav-link" href="{{ route('transaksi') }}">Riwayat
                                        Pembelian</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @if(Request::segment(1) == 'produk') active @endif">
                        <a class="nav-link" data-toggle="collapse" href="#produk" aria-expanded="false"
                            aria-controls="advanced">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-package link-icon">
                                <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="menu-title">Produk</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse @if(Request::segment(1) == 'produk') show @endif" id="produk">
                            <ul class="nav flex-column mt-0">
                                <li class="nav-item pl-4 @if(Request::segment(2) == 'prabayar') active @endif">
                                    <a class="nav-link"
                                        href="{{ route('produk', ['produkSlug' => 'prabayar']) }}">Prabayar</a>
                                </li>
                                <li class="nav-item pl-4">
                                    <a class="nav-link disabled text-muted" href="customer.html" tabindex="-1"
                                        role="button" aria-disabled="true">
                                        Pascabayar
                                        <span class="badge badge-pill badge-light">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @if(Request::segment(1) == 'flash-sale') active @endif">
                        <a class="nav-link" href="{{ route('flash-sale') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-zap link-icon">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                            <span class="menu-title">Flash Sale</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('flash-sale') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-percent link-icon">
                                <line x1="19" y1="5" x2="5" y2="19"></line>
                                <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                <circle cx="17.5" cy="17.5" r="2.5"></circle>
                            </svg>
                            <span class="menu-title">Voucher</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#pelanggan" aria-expanded="false"
                            aria-controls="advanced">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users link-icon">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span class="menu-title">Pelanggan</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="pelanggan">
                            <ul class="nav flex-column mt-0">
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Anggota</a></li>
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Ulasan</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#statistik" aria-expanded="false"
                            aria-controls="advanced">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-pie-chart link-icon">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span class="menu-title">Statistik</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="statistik">
                            <ul class="nav flex-column mt-0">
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html"></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @if(Request::segment(1) == 'metode-pembayaran') active @endif">
                        <a class="nav-link" href="{{ route('metode-pembayaran') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-dollar-sign link-icon">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                            <span class="menu-title">Metode Pembayaran</span>
                        </a>
                    </li>
                    <li class="nav-item @if(Request::segment(1) == 'pengaturan') active @endif">
                        <a class="nav-link" data-toggle="collapse" href="#pengaturan" aria-expanded="false"
                            aria-controls="advanced">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-settings link-icon">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg>
                            <span class="menu-title">Pengaturan</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse @if(Request::segment(1) == 'pengaturan') show @endif" id="pengaturan">
                            <ul class="nav flex-column mt-0">
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Pengaturan
                                        Akun</a></li>
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Pengaturan
                                        Toko</a></li>
                                <li class="nav-item pl-4 @if(Request::segment(2) == 'kategori') active @endif">
                                    <a class="nav-link" href="{{ route('kategori') }}">
                                        Kategori Produk
                                    </a>
                                </li>
                                <li class="nav-item pl-4 @if(Request::segment(2) == 'pembayaran') active @endif">
                                    <a class="nav-link" href="{{ route('pembayaran') }}">
                                        Kategori Pembayaran
                                    </a>
                                </li>
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Integrasi API</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>

                    <!-- Footer Area -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Footer Area -->
                                <footer
                                    class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                                    <!-- Copywrite Text -->
                                    <div class="copywrite-text">
                                        <p>Dibuat oleh @ <a href="https://www.instagram.com/topup.teamkito.id/"
                                                target="_blank">Teamkito Labs</a></p>
                                    </div>
                                    <div class="fotter-icon text-center">
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Facebook"
                                            rel="noopener noreferrer" target="_blank">
                                            <img src="{{ asset('storage/img/flat-icon/facebook.png') }}" />
                                        </a>
                                        <a href="https://www.instagram.com/topup.teamkito.id/" class="action-item mr-2"
                                            data-toggle="tooltip" title="Instagram" rel="noopener noreferrer"
                                            target="_blank">
                                            <img src="{{ asset('storage/img/flat-icon/instagram.png') }}" />
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Twitter"
                                            rel="noopener noreferrer" target="_blank">
                                            <img src="{{ asset('storage/img/flat-icon/twitter.png') }}" />
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Youtube"
                                            rel="noopener noreferrer" target="_blank">
                                            <img src="{{ asset('storage/img/flat-icon/youtube.png') }}" />
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Tiktok"
                                            rel="noopener noreferrer" target="_blank">
                                            <img src="{{ asset('storage/img/flat-icon/tik-tok.png') }}" />
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Discord"
                                            rel="noopener noreferrer" target="_blank">
                                            <img src="{{ asset('storage/img/flat-icon/discord.png') }}" />
                                        </a>
                                    </div>
                                </footer>
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
