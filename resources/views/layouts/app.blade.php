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
                <a class="navbar-brand brand-logo mr-5" href="{{ route('beranda') }}"><img src="{{ asset('storage/img/core-img/logo.png') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('beranda') }}"><img src="{{ asset('storage/img/core-img/small-logo.png') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
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
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
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
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top" aria-labelledby="profileDropdown">
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon" aria-hidden="true"></i> My profile</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon" aria-hidden="true"></i> Messages</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon" aria-hidden="true"></i> Settings</a>
                            <a href="#" class="dropdown-item"><i class="ti-unlink profile-icon" aria-hidden="true"></i> Sign-out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="ti-layout-grid2"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- Side Menu area -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box link-icon">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="menu-title">Dasbor</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendar.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar link-icon">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="menu-title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#advanced" aria-expanded="false" aria-controls="advanced">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit link-icon">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            <span class="menu-title">Advanced</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="advanced">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="clint-list.html">Clint list</a></li>
                                <li class="nav-item"> <a class="nav-link" href="customer.html">Customer</a></li>
                                <li class="nav-item"> <a class="nav-link" href="blank.html">Blank page</a></li>
                                <li class="nav-item"> <a class="nav-link" href="gallery.html">Gallery</a></li>
                                <li class="nav-item"> <a class="nav-link" href="light-box.html">Light box gallery</a></li>
                                <li class="nav-item"> <a class="nav-link" href="modals.html">Modals</a></li>
                                <li class="nav-item"> <a class="nav-link" href="profile.html">Profile</a></li>
                                <li class="nav-item"> <a class="nav-link" href="profile-2.html">Profile 2</a></li>
                                <li class="nav-item"> <a class="nav-link" href="ribbons.html">Ribbons</a></li>
                                <li class="nav-item"> <a class="nav-link" href="sweet.html">Sweet alert</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#job" aria-expanded="false" aria-controls="job">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell link-icon">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="menu-title">Job</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="job">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="job.html">Job news</a></li>
                                <li class="nav-item"><a class="nav-link" href="job-description.html">Description</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#app" aria-expanded="false" aria-controls="app">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command link-icon">
                                <path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                            </svg>
                            <span class="menu-title">Apps</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="app">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="widgets.html">Widget</a></li>
                                <li class="nav-item"><a class="nav-link" href="chat-box.html">Chat box</a></li>
                                <li class="nav-item"><a class="nav-link" href="timeline.html">Timeline</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#email" aria-expanded="false" aria-controls="email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail link-icon">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span class="menu-title">Email</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="email">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="mail-inbox.html">Inbox</a></li>
                                <li class="nav-item"><a class="nav-link" href="mail-view.html">Mail view</a></li>
                                <li class="nav-item"><a class="nav-link" href="compose-mail.html">Compose mail</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#elements" aria-expanded="false" aria-controls="elements">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather link-icon">
                                <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                                <line x1="16" y1="8" x2="2" y2="22"></line>
                                <line x1="17.5" y1="15" x2="9" y2="15"></line>
                            </svg>
                            <span class="menu-title">Ui Kits</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="alert.html">Alert</a></li>
                                <li class="nav-item"><a class="nav-link" href="avatar.html">Avatar</a></li>
                                <li class="nav-item"><a class="nav-link" href="buttons.html">Button</a></li>
                                <li class="nav-item"><a class="nav-link" href="card.html">Card</a></li>
                                <li class="nav-item"><a class="nav-link" href="notification.html">Notification</a></li>
                                <li class="nav-item"><a class="nav-link" href="general.html">General</a></li>
                                <li class="nav-item"><a class="nav-link" href="progressbar.html">Progressbar</a></li>
                                <li class="nav-item"><a class="nav-link" href="preloader.html">Preloader</a></li>
                                <li class="nav-item"><a class="nav-link" href="tab.html">Tab</a></li>
                                <li class="nav-item"><a class="nav-link" href="dropdown.html">Dropdown</a></li>
                                <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users link-icon">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span class="menu-title">Members</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general" aria-expanded="false" aria-controls="general">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard link-icon">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="menu-title">Pages</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="general">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="slider.html">Slider</a></li>
                                <li class="nav-item"><a class="nav-link" href="range.html">Range Slider</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="forget-password.html">Forget Password</a></li>
                                <li class="nav-item"><a class="nav-link" href="lock-screen.html">Lock Screen</a></li>
                                <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart link-icon">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span class="menu-title">Charts</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="apex-chart.html">Apex chart</a></li>
                                <li class="nav-item"> <a class="nav-link" href="chartist.html">Chartist Chart</a></li>
                                <li class="nav-item"> <a class="nav-link" href="chart-js.html">Chart js</a></li>
                                <li class="nav-item"> <a class="nav-link" href="morris-chart.html">Morris chart</a></li>
                                <li class="nav-item"> <a class="nav-link" href="c3-charts.html">C3 chart</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="task.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list link-icon">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                            </svg>
                            <span class="menu-title">Task Zone</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tablet link-icon">
                                <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                            </svg>
                            <span class="menu-title">Tables</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="basic-table.html">Basic table</a></li>
                                <li class="nav-item"> <a class="nav-link" href="data-table.html">Data table</a></li>
                                <li class="nav-item"> <a class="nav-link" href="price-table.html">Price table</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form" aria-expanded="false" aria-controls="form">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder-minus link-icon">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                                <line x1="9" y1="14" x2="15" y2="14"></line>
                            </svg>
                            <span class="menu-title">Forms</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="form">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="basic-form.html">Basic form</a></li>
                                <li class="nav-item"> <a class="nav-link" href="advanced-elements.html">Elements</a></li>
                                <li class="nav-item"> <a class="nav-link" href="form-validation.html">Validation</a></li>
                                <li class="nav-item"> <a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
                                <li class="nav-item"> <a class="nav-link" href="form-input-mask.html">Input mask</a></li>
                                <li class="nav-item"> <a class="nav-link" href="file-upload.html">File upload</a></li>
                                <li class="nav-item"> <a class="nav-link" href="rating.html">Rating</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ecommerce" aria-expanded="false" aria-controls="ecommerce">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart link-icon">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            <span class="menu-title">Ecommerce</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="ecommerce">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="product.html">Product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="product-details.html">Single Product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="order.html">Order</a></li>
                                <li class="nav-item"> <a class="nav-link" href="cart.html">Cart</a></li>
                                <li class="nav-item"> <a class="nav-link" href="checkout.html">Checkout</a></li>
                                <li class="nav-item"> <a class="nav-link" href="invoice.html">Invoice</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-aperture link-icon">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                                <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                                <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                                <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                                <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                                <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                            </svg>
                            <span class="menu-title">Icons</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="font-awesome.html">Font Awesome</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pe-7-stroke.html">Pe-7 stroke</a></li>
                                <li class="nav-item"> <a class="nav-link" href="matarial-icons.html">Materialize</a></li>
                                <li class="nav-item"> <a class="nav-link" href="themify-icons.html">Themify</a></li>
                                <li class="nav-item"> <a class="nav-link" href="elegant-icons.html">Elegant</a></li>
                                <li class="nav-item"> <a class="nav-link" href="et-line-icons.html">Et-line</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin link-icon">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span class="menu-title">Maps</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="maps">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="vector-map.html">Vector</a></li>
                                <li class="nav-item"> <a class="nav-link" href="google-map.html">Google</a></li>
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
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <h4 class="card-title mb-0">Order <span class="break-320-480-none">Summary</span></h4>
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
                                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
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

                                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
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

                                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
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

                                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
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
                                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#kt_portlet_tabs_1_1_1_content" role="tab" aria-selected="true">
                                                                Week
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_1_3_content" role="tab" aria-selected="false">
                                                                Month
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body" id="notificationBox">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show" id="kt_portlet_tabs_1_1_1_content" role="tabpanel">
                                                        <div class="kt-scroll ps ps--active-y" data-scroll="true" data-mobile-height="350">
                                                            <!--Begin::Timeline -->
                                                            <div class="kt-timeline">
                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--success">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_mail_alt text-primary font-weight-bold"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">02:30 PM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">Xviten created new layout whith tens of new options for Keen Admin panel</a>
                                                                    <div class="kt-timeline__item-info">
                                                                        HTML,CSS,VueJS
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        New secyrity alert by Firewall &amp; order to take aktion on User Preferences
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
                                                                                <i class="icon_gift_alt font-weight-bold text-success"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">Yestardey</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        PSD, Sketch, AJ
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->


                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        New secyrity alert by Firewall &amp; order to take aktion on User Preferences
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Security, Fieewall
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--warning">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_datareport font-weight-bold text-warning"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">Aug 13,2019</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br> England, BA12FJ
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Meeting, Customer
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="kt_portlet_tabs_1_1_3_content" role="tabpanel">
                                                        <div class="kt-scroll ps" data-scroll="true" style="height: 420px; overflow: hidden;" data-mobile-height="350">
                                                            <!--Begin::Timeline -->
                                                            <div class="kt-timeline">
                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--success">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_mail_alt text-primary font-weight-bold"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:30 PM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">Created new layout whith tens of new options for Keen Admin panel</a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Vue,CSS,VueJS
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        Secyrity alert by Firewall &amp; order to take aktion on User Preferences
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
                                                                                <i class="icon_gift_alt font-weight-bold text-success"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">Yestardey</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Hadrla, Sketch, AJ
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->


                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        New secyrity alert by Firewall &amp; order to take aktion on User Preferences
                                                                    </a>
                                                                    <div class="kt-timeline__item-info">
                                                                        Security, Fieewall
                                                                    </div>
                                                                </div>
                                                                <!--End::Item -->

                                                                <!--Begin::Item -->
                                                                <div class="kt-timeline__item kt-timeline__item--warning">
                                                                    <div class="kt-timeline__item-section">
                                                                        <div class="kt-timeline__item-section-border">
                                                                            <div class="kt-timeline__item-section-icon">
                                                                                <i class="icon_datareport font-weight-bold text-warning"></i>
                                                                            </div>
                                                                        </div>
                                                                        <span class="kt-timeline__item-datetime">Aug 15,2019</span>
                                                                    </div>

                                                                    <a href="" class="kt-timeline__item-text">
                                                                        With Xita Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br> England, BA12FJ
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
                                            <h4 class="card-title mb-15">View full calenar <i class="fa fa-angle-double-right ml-1"></i></h4>
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
                                    <div class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                                        <h6 class="card-title mb-0">Support Tickets</h6>
                                        <ul class="nav nav-tabs mb-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link show active" id="sell-03-tab" data-toggle="tab" href="#sell-03" role="tab" aria-controls="sell-03" aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mr-0" id="rent-04-tab" data-toggle="tab" href="#rent-04" role="tab" aria-controls="rent-04" aria-selected="false">Week</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Tab -->
                                    <div class="card-body">
                                        <div class="tab-content" id="ticketList">
                                            <div class="tab-pane fade active show" id="sell-03" role="tabpanel" aria-labelledby="sell-03-tab">
                                                <ul class="ticket-data-list">
                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span class="avatar avatar-pending primary-color mr-3">Z</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Zara Smith</h6>
                                                                    <p class="ticket-time mb-0 font-12">(9:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor amet, consectetur adipisicing elit Nisila Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eos recusandae obcaecati repudiandae harum quae.</p>
                                                                <span class="badge badge-pill badge-secondary">Closed</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetur...</p>
                                                                <span class="badge badge-pill badge-warning">Pending</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Tab 2 -->
                                            <div class="tab-pane fade" id="rent-04" role="tabpanel" aria-labelledby="rent-04-tab">
                                                <ul class="ticket-data-list">
                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span class="avatar avatar-pending bg-danger mr-3">J</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Jhon Deo</h6>
                                                                    <p class="ticket-time mb-0 font-12">(9:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor amet, consectetur adipisicing elit Nisila Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eos recusandae obcaecati repudiandae harum quae.</p>
                                                                <span class="badge badge-pill badge-secondary">Closed</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="avatar-area d-flex">
                                                            <span class="avatar avatar-online primary-color mr-3">J</span>
                                                            <div class="avatar-text">
                                                                <div class="d-flex align-items-center">
                                                                    <h6 class="mr-2 mb-0">Jhon Deo</h6>
                                                                    <p class="ticket-time mb-0 font-12">(7:40 PM)</p>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetur...</p>
                                                                <span class="badge badge-pill badge-warning">Pending</span>
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
                                                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i class="fa fa-download"></i></span>
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
                                                                <button type="button" class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i class="fa fa-download"></i></span>
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
                                                                <button type="button" class="btn btn-rounded btn-outline-warning">
                                                                    <span class="btn-inner--text">Pay now</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i class="fa fa-download"></i></span>
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
                                                                <button type="button" class="btn btn-rounded btn-outline-danger">
                                                                    <span class="btn-inner--text">Delayed</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i class="fa fa-download"></i></span>
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
                                                                <button type="button" class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i class="fa fa-download"></i></span>
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
                                                                <button type="button" class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
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
                                <footer class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
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
