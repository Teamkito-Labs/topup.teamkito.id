<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top Up Game @yield('title') Murah dan Cepat di {{ config('app.name') }}</title>
    <meta name="description" content="@yield('description')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="@yield('robots')">
    <meta name="author" content="Teamkito Labs">

    <meta property="og:title" content="Top Up Game @yield('title') Murah dan Cepat di {{ config('app.name') }}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="{{ asset('storage/img/masuk/masuk-topup-teamkito-id.png') }}">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top Up Game @yield('title') Murah dan Cepat di {{ config('app.name') }}">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{ asset('storage/img/masuk/masuk-topup-teamkito-id.png') }}">
    <meta name="twitter:site" content="@teamkitoid">

    <link rel="canonical" href="URL Kananonis">

    <link rel="icon" href="{{ asset('storage/img/core-img/favicon.png') }}" type="image/x-icon">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- Tambahan Stylesheet CSS -->
    @stack('styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="{{ asset('assets/app-f79bab79.js') }}"></script>
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
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="{{ route('beranda') }}"><img
                                src="{{ asset('storage/img/core-img/logo.png') }}" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="{{ route('beranda') }}"><img
                                src="{{ asset('storage/img/core-img/small-logo.png') }}" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item app-search d-none d-md-block">
                                <form role="search" class=""><input type="text" placeholder="Pencarian Game"
                                        class="form-control">
                                    <button type="submit" class="search-btn mr-0"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-nav-right">
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

                            <div>
								@if (Auth::user())
								<div class="mt-1">
                                    <li class="nav-item nav-profile dropdown dropdown-animate">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                            id="profileDropdown">
                                            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}"
                                                alt="profile" />
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top"
                                            aria-labelledby="profileDropdown">
                                            <a href="#" class="dropdown-item"><i
                                                    class="zmdi zmdi-account profile-icon mr-2" aria-hidden="true"></i>
                                                Ubah Profil</a>
                                            <a href="#" class="dropdown-item"><i
                                                    class="zmdi zmdi-file-text profile-icon mr-2"
                                                    aria-hidden="true"></i> Riwayat Transaksi</a>
                                            <a href="#" class="dropdown-item"><i class="ti-unlink profile-icon mr-2"
                                                    aria-hidden="true"></i> Keluar</a>
                                        </div>
                                    </li>
                                </div>								
								@else
								<div class="my-3 mx-1">
                                    <a class="btn btn-primary btn-rounded btn-block align-middle"
                                        href="{{ route('login') }}">
                                        Masuk
                                    </a>
                                </div>
								@endif
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Main Page -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container-fluid">
                    {{ $slot }}

                    <section id="topup-teamkito" class="mt-5">
                        <div class="card shadow-sm rounded-lg">
                            <div class="card-body p-4">
                                <label class="font-weight-bold h4 text-body"><img
                                        src="{{ asset('storage/img/flat-icon/verified.png') }}" /> Top Up Teamkito
                                    ID</label>
                                <h6>Top Up Game Murah dan Cepat di topup.teamkito.id</h6>
                                <p class="text-muted mb-0">
                                    Situs resmi yang berdedikasi untuk memberikan pengalaman top up game yang mudah,
                                    cepat, dan
                                    terjangkau bagi para gamer di Indonesia. Situs ini beroperasi dengan lisensi dan
                                    peraturan yang
                                    sesuai dengan hukum yang berlaku di Indonesia dan berkomitmen untuk menjaga
                                    transparansi dan
                                    integritas dalam setiap transaksi. Top Up Teamkito ID juga bekerja sama dengan
                                    penyedia game resmi
                                    untuk menyediakan layanan top up yang sah dan terpercaya. Keamanan data pengguna
                                    dijaga dengan
                                    teknologi enkripsi terbaru dan tim layanan pelanggan siap membantu dengan pertanyaan
                                    atau masalah
                                    yang mungkin dihadapi pengguna.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Footer Area -->
                <div class="container-fluid mt-5">
                    <section id="footer-top" class="py-3">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 mt-4">
                                <img src="{{ asset('storage/img/core-img/logo.png') }}" alt="logo"
                                    style="height: 50px;" />
                                <p class="my-3">
                                    Top up game murah dan cepat di topup.teamkito.id. Dukung permainan Anda dengan top
                                    up untuk game populer seperti Free Fire, Mobile Legends, PUBG Mobile, dan Genshin
                                    Impact. Nikmati harga terjangkau dan proses instan hanya di topup.teamkito.id.
                                </p>
                                <ul class="list-inline my-3">
                                    <li class="list-inline-item">
                                        <a href="mailto:topup@teamkito.id" class="font-weight-bold text-primary">
                                            <i class="icon_mail_alt"></i>
                                            topup@teamkito.id
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="http://wa.me/628117367673" class="font-weight-bold text-primary">
                                            <i class="fa fa-whatsapp"></i>
                                            Chat WhatsApp
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://maps.app.goo.gl/HjuWU7EFuaBaUQrf9" class="font-weight-bold text-primary">
                                            <i class="icon_pin_alt"></i>
                                            Kandang Limun, Muara Bangka Hulu, Kota Bengkulu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 mt-4">
                                <h5>Informasi</h5>
                                <nav class="mb-4">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="http://" class="text-primary">Kebijakan
                                                Privasi</a></li>
                                        <li class="list-inline-item"><a href="http://" class="text-primary">Syarat &
                                                Ketentuan</a></li>
                                        <li class="list-inline-item"><a href="http://" class="text-primary">FAQ</a></li>
                                    </ul>
                                </nav>

                                <p>
                                    Daftar sebagai anggota hari ini untuk mendapatkan penawaran eksklusif yang tidak
                                    akan Anda temukan di tempat lain. <a href="http://" class="text-primary">Gabung
                                        Sekarang!</a>
                                </p>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            <footer
                                class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between shadow-sm rounded-lg">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text">
                                    <p>Dibuat oleh @ <a href="#">Teamkito Labs</a></p>
                                </div>
                                <div class="fotter-icon text-center">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Facebook"
                                        rel="noopener noreferrer">
                                        <img src="{{ asset('storage/img/flat-icon/facebook.png') }}" />
                                    </a>
                                    <a href="https://www.instagram.com/topup.teamkito.id/" class="action-item mr-2" data-toggle="tooltip" title="Instagram"
                                        rel="noopener noreferrer">
                                        <img src="{{ asset('storage/img/flat-icon/instagram.png') }}" />
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Twitter"
                                        rel="noopener noreferrer">
                                        <img src="{{ asset('storage/img/flat-icon/twitter.png') }}" />
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Youtube"
                                        rel="noopener noreferrer">
                                        <img src="{{ asset('storage/img/flat-icon/youtube.png') }}" />
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Tiktok"
                                        rel="noopener noreferrer">
                                        <img src="{{ asset('storage/img/flat-icon/tik-tok.png') }}" />
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Discord"
                                        rel="noopener noreferrer">
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
