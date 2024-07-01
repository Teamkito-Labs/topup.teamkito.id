<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top Up Game @yield('title') Murah dan Cepat di {{ config('app.name') }}</title>
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

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Style -->
    @vite([
    'public/xvito-responsive-bootstrap/nav-sidebar/style.css',
    'resources/js/app.js',
    ])
    @stack('styles')
</head>

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
                            <img src="{{ asset('storage/img/member-img/contact-2.jpg') }}" alt="profile" />
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
								<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
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
                        <a class="nav-link" href="index.html">
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
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Riwayat
                                        Pembelian</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
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
                        <div class="collapse" id="produk">
                            <ul class="nav flex-column mt-0">
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Prabayar</a>
                                </li>
                                <li class="nav-item pl-4"> <a class="nav-link disabled text-muted" href="customer.html"
                                        tabindex="-1" role="button" aria-disabled="true">Pascabayar <span
                                            class="badge badge-pill badge-light"><i class="fa fa-clock-o"
                                                aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
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
                    <li class="nav-item">
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
                        <div class="collapse" id="pengaturan">
                            <ul class="nav flex-column mt-0">
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Kategori Produk</a></li>
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Pengaturan Akun</a></li>
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Pengaturan Toko</a></li>
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Pengaturan Pembayaran</a></li>
                                <li class="nav-item pl-4"> <a class="nav-link" href="clint-list.html">Integrasi API</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase font-14">
                                                    Budget
                                                </h6>

                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0">
                                                    $2500
                                                </span>
                                            </div>

                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-8.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="font-14 text-uppercase">
                                                    Total Hours
                                                </h6>
                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0">
                                                    663.5
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-9.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="font-14 text-uppercase">
                                                    Progress
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <!-- Heading -->
                                                        <span class="font-24 text-dark mr-2">
                                                            84.5%
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Progress -->
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="font-14 text-uppercase">
                                                    Cost/Unit
                                                </h6>
                                                <!-- Heading -->
                                                <span class="font-24 text-dark">
                                                    $7.50
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-11.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row">
                            <!-- Order Summary -->
                            <div class="col-lg-8 col-12 box-margin height-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-50">
                                            <h4 class="card-title mb-0">Order <span
                                                    class="break-320-480-none">Summary</span></h4>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary btn-sm mr-2">Month</button>
                                                <button type="button" class="btn btn-secondary btn-sm">Week</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Chart -->
                                    <div class="card-body p-0">
                                        <div class="card-content">
                                            <div id="order-summary-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Latest Update Area -->
                            <div class="col-lg-4 box-margin height-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Latest Update</h5>
                                        <div class="transaction-area">
                                            <div
                                                class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                                <div class="media d-flex justify-content-center align-items-center">
                                                    <div class="icon-section bg-primary-soft">
                                                        <i class="fa fa-file-code-o"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1 font-15">New Users</h6>
                                                        <p class="mb-0 font-13">6 June 19, 10:25 AM</p>
                                                    </div>
                                                </div>

                                                <div class="amount txt-gray-5">
                                                    <p class="mb-0">57,0000</p>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                                <div class="media d-flex justify-content-center align-items-center">
                                                    <div class="icon-section bg-danger-soft">
                                                        <i class="fa fa-newspaper-o"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1 font-15">Page Views</h6>
                                                        <p class="mb-0 font-13">9 July 19, 03:43 Pm</p>
                                                    </div>
                                                </div>

                                                <div class="amount txt-gray-5">
                                                    <p class="mb-0">79,496</p>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                                <div class="media d-flex justify-content-center align-items-center">
                                                    <div class="icon-section bg-success-soft">
                                                        <i class="fa fa-clone"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1 font-15">Page Sessions</h6>
                                                        <p class="mb-0 font-13">6 April 19, 02:34 PM</p>
                                                    </div>
                                                </div>

                                                <div class="amount txt-gray-5">
                                                    <p class="mb-0">47,381</p>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                                <div class="media d-flex justify-content-center align-items-center">
                                                    <div class="icon-section bg-danger-soft">
                                                        <i class="icon-wallet"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1 font-15">Click Through</h6>
                                                        <p class="mb-0 font-13">22 January 19, 07:21 AM</p>
                                                    </div>
                                                </div>

                                                <div class="amount txt-gray-5">
                                                    <p class="mb-0">4,76,8294</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Visits Chart Area -->
                            <div class="col-md-6 col-xl-4 box-margin height-card ">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title">Visits of 2019</h4>
                                            <div id="radial-chart"></div>
                                            <ul class="list-inline d-flex justify-content-around mb-0">
                                                <li> <i class="fa fa-circle mr-1 text-danger"></i>Target</li>
                                                <li> <i class="fa fa-circle text-success mr-1"></i>Mart</li>
                                                <li> <i class="fa fa-circle text-primary mr-1"></i>Ebay</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Notification Area -->
                            <div class="col-md-6 col-xl-4 box-margin height-card ">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="card-title mb-0">
                                                        Notifications
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab"
                                                                href="#kt_portlet_tabs_1_1_1_content" role="tab"
                                                                aria-selected="true">
                                                                Week
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                                href="#kt_portlet_tabs_1_1_3_content" role="tab"
                                                                aria-selected="false">
                                                                Month
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body" id="notificationBox">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show"
                                                        id="kt_portlet_tabs_1_1_1_content" role="tabpanel">
                                                        <div class="kt-scroll ps ps--active-y" data-scroll="true"
                                                            data-mobile-height="350">
                                                            <!--Begin::Timeline -->
                                                            <div class="kt-timeline">
                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--success">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_mail_alt text-primary font-weight-bold"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">02:30
                                                                            PM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">Xviten
                                                                        created new layout whith tens of new options for
                                                                        Keen Admin panel</a>
                                                                    <div class="kt-timeline__item-info">
                                                                        HTML,CSS,VueJS
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20
                                                                            AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        New secyrity alert by Firewall &amp; order to
                                                                        take aktion on User Preferences
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Security, Fieewall
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--brand">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_gift_alt font-weight-bold text-success"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="kt-timeline__item-datetime">Yestardey</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        FlyMore design mock-ups been uploadet by
                                                                        designers Bob, Naomi, Richard
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        PSD, Sketch, AJ
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->


                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20
                                                                            AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        New secyrity alert by Firewall &amp; order to
                                                                        take aktion on User Preferences
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Security, Fieewall
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--warning">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_datareport font-weight-bold text-warning"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">Aug
                                                                            13,2019</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        Meeting with Ken Digital Corp ot Unit14, 3
                                                                        Edigor Buildings, George Street, Loondon<br>
                                                                        England, BA12FJ
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Meeting, Customer
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="kt_portlet_tabs_1_1_3_content"
                                                        role="tabpanel">
                                                        <div class="kt-scroll ps" data-scroll="true"
                                                            style="height: 420px; overflow: hidden;"
                                                            data-mobile-height="350">
                                                            <!--Begin::Timeline -->
                                                            <div class="kt-timeline">
                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--success">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_mail_alt text-primary font-weight-bold"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:30
                                                                            PM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">Created
                                                                        new layout whith tens of new options for Keen
                                                                        Admin panel</a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Vue,CSS,VueJS
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20
                                                                            AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        Secyrity alert by Firewall &amp; order to take
                                                                        aktion on User Preferences
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Security, Fieewall
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--brand">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_gift_alt font-weight-bold text-success"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="kt-timeline__item-datetime">Yestardey</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        FlyMore design mock-ups been uploadet by
                                                                        designers Bob, Naomi, Richard
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Hadrla, Sketch, AJ
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->


                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20
                                                                            AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        New secyrity alert by Firewall &amp; order to
                                                                        take aktion on User Preferences
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Security, Fieewall
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div
                                                                    class="kt-timeline__item kt-timeline__item--warning">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i
                                                                                    class="icon_datareport font-weight-bold text-warning"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">Aug
                                                                            15,2019</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        With Xita Digital Corp ot Unit14, 3 Edigor
                                                                        Buildings, George Street, Loondon<br> England,
                                                                        BA12FJ
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Meeting, Clint
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->
                                                                <!--End::Item -->
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Calendar Area-->
                            <div class="col-lg-6 col-xl-4 box-margin height-card">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="calendar.html">
                                            <h4 class="card-title mb-15">View full calenar <i
                                                    class="fa fa-angle-double-right ml-1"></i></h4>
                                        </a>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="calendar2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projects of the Month -->
                            <div class="col-lg-6 col-xl-6 height-card box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title mb-30">Projects</h6>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Project</th>
                                                        <th>Date</th>
                                                        <th>Due Date</th>
                                                        <th>Status</th>
                                                        <th>Assign</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>jQuery</td>
                                                        <td>07/07/2079</td>
                                                        <td>26/04/2079</td>
                                                        <td><span class="badge badge-danger">Released</span></td>
                                                        <td>Hilana</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Angular</td>
                                                        <td>07/07/2079</td>
                                                        <td>26/04/2079</td>
                                                        <td><span class="badge badge-success">Review</span></td>
                                                        <td>Henson</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ReactJs</td>
                                                        <td>07/05/2079</td>
                                                        <td>10/09/2079</td>
                                                        <td><span class="badge badge-info">Pending</span></td>
                                                        <td>Jensen</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VueJs</td>
                                                        <td>07/07/2079</td>
                                                        <td>31/11/2079</td>
                                                        <td><span class="badge badge-warning">Work in Progress</span>
                                                        </td>
                                                        <td>Burton</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Laravel</td>
                                                        <td>07/07/2079</td>
                                                        <td>31/12/2079</td>
                                                        <td><span class="badge badge-danger">Coming soon</span></td>
                                                        <td>Yaretzi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NodeJs</td>
                                                        <td>07/07/2079</td>
                                                        <td>31/12/2079</td>
                                                        <td><span class="badge badge-primary">Coming soon</span></td>
                                                        <td>Henson</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Support Ticket -->
                            <div class="col-xl-6 height-card box-margin">
                                <div class="card">
                                    <div
                                        class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                                        <h6 class="card-title mb-0">Support Tickets</h6>
                                        <ul class="nav nav-tabs mb-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link show active" id="sell-03-tab" data-toggle="tab"
                                                    href="#sell-03" role="tab" aria-controls="sell-03"
                                                    aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mr-0" id="rent-04-tab" data-toggle="tab"
                                                    href="#rent-04" role="tab" aria-controls="rent-04"
                                                    aria-selected="false">Week</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Tab -->
                                    <div class="card-body">
                                        <div class="tab-content" id="ticketList">
                                            <div class="tab-pane fade active show" id="sell-03" role="tabpanel"
                                                aria-labelledby="sell-03-tab">
                                                <ul class="ticket-data-list">
                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span
                                                                class="avatar avatar-pending primary-color mr-3">Z</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Zara Smith</h6>
                                                                    <p class="ticket-time mb-0 font-12">(9:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor amet, consectetur adipisicing elit
                                                                    Nisila Lorem ipsum dolor sit amet, consectetur
                                                                    adipisicing.</p>
                                                                <span class="badge badge-pill badge-primary">Open</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span class="avatar bg-info mr-3">A</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Ajoy Das</h6>
                                                                    <p class="ticket-time mb-0 font-12">(8:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Nisi eos recusandae obcaecati repudiandae
                                                                    harum quae.</p>
                                                                <span
                                                                    class="badge badge-pill badge-secondary">Closed</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span class="avatar avatar-online bg-success mr-3">J</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Jhon Deo</h6>
                                                                    <p class="ticket-time mb-0 font-12">(7:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit Lorem ipsum dolor Lorem ipsum dolor sit amet,
                                                                    consectetur...</p>
                                                                <span
                                                                    class="badge badge-pill badge-warning">Pending</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Tab 2 -->
                                            <div class="tab-pane fade" id="rent-04" role="tabpanel"
                                                aria-labelledby="rent-04-tab">
                                                <ul class="ticket-data-list">
                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span class="avatar avatar-pending bg-danger mr-3">J</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Jhon Deo</h6>
                                                                    <p class="ticket-time mb-0 font-12">(9:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor amet, consectetur adipisicing elit
                                                                    Nisila Lorem ipsum dolor sit amet, consectetur
                                                                    adipisicing.</p>
                                                                <span class="badge badge-pill badge-primary">Open</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span class="avatar bg-success mr-3">L</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Lara Jhon</h6>
                                                                    <p class="ticket-time mb-0 font-12">(8:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Nisi eos recusandae obcaecati repudiandae
                                                                    harum quae.</p>
                                                                <span
                                                                    class="badge badge-pill badge-secondary">Closed</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span
                                                                class="avatar avatar-online primary-color mr-3">J</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Jhon Deo</h6>
                                                                    <p class="ticket-time mb-0 font-12">(7:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit Lorem ipsum dolor Lorem ipsum dolor sit amet,
                                                                    consectetur...</p>
                                                                <span
                                                                    class="badge badge-pill badge-warning">Pending</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Order Summary Area -->
                            <div class="col-12 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Order Summary</h6>
                                        <!-- Table -->
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice</th>
                                                        <th>Order</th>
                                                        <th>Amount</th>
                                                        <th>Client</th>
                                                        <th>Modified</th>
                                                        <th>Taxes</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>18/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>12/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-warning">
                                                                    <span class="btn-inner--text">Pay now</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>20/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-danger">
                                                                    <span class="btn-inner--text">Delayed</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>28/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>29/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p>Created by @<a href="#">Theme-zome</a></p>
                                    </div>
                                    <div class="fotter-icon text-center">
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Pinterest">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Instagram">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
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
    @vite([
    'public/xvito-responsive-bootstrap/js/jquery.min.js',
    'public/xvito-responsive-bootstrap/js/wow.min.js',
    'public/xvito-responsive-bootstrap/js/popper.min.js',
    'public/xvito-responsive-bootstrap/js/bootstrap.min.js',
    'public/xvito-responsive-bootstrap/js/bundle.js',
    'public/xvito-responsive-bootstrap/js/canvas.js',
    'public/xvito-responsive-bootstrap/js/collapse.js',
    'public/xvito-responsive-bootstrap/js/settings.js',
    'public/xvito-responsive-bootstrap/js/template.js',
    'public/xvito-responsive-bootstrap/js/default-assets/active.js',
    ])
    @stack('scripts')
</body>

</html>
