<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'VOLTECH') }}</title>
    <!-- bala insert -->
    <!--Favicon -->
    <link rel="icon" href="{{ asset('images/brand/favicon.png') }}" type="image/x-icon" />
    <!--Bootstrap css 
        <link href="{{ asset('plugins/bootstrap/css/bootstrap1.min.css') }}" rel="stylesheet">-->
    <!-- Style css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!--<link href="{{ asset('css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/skin-modes.css') }}" rel="stylesheet" /> -->
    <!-- Animate css 
    <link href="{{ asset('css/animated.css') }}" rel="stylesheet" /> -->
    <!-- P-scroll bar css
    <link href="{{ asset('plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" /> -->
    <!---Icons css-->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" />
    <!-- Simplebar css 
    <link rel="stylesheet" href="{{ asset('plugins/simplebar/css/simplebar.css') }}"> -->
    <!-- Color Skin css -->
    <link id="theme" href="{{ asset('colors/color1.css') }}" rel="stylesheet" type="text/css" />
    <!-- Switcher css 
    <link rel="stylesheet" href="{{ asset('switcher/css/switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('switcher/demo.css') }}">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <!-- Data table css -->
    <link href="{{ asset('plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatable/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <!-- INTERNAL File Uploads css 
    <link href="{{ asset('plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" /> -->
    <!-- INTERNAL Time picker css 
    <link href="{{ asset('plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />-->
    <!-- INTERNAL Date Picker css
    <link href="{{ asset('plugins/date-picker/date-picker.css') }}" rel="stylesheet" />  -->
    <!-- select2 css -->
    <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <!-- INTERNAL File Uploads css
    <link href="{{ asset('plugins/fileupload/css/fileupload.css') }}" rel="stylesheet" type="text/css" />-->
    <!-- bala insert end -->
</head>

<body class="app main-body">
    <!---Global-loader-->
    <div id="global-loader">
        <img src="{{ asset('images/svgs/loader.svg') }}" alt="loader">
    </div>
    <!--- End Global-loader-->
    <!-- Page -->
    <div class="page">
        <div class="page-main">
            <!--header-->
            <div class="hor-header bg-white top-header stripimg">
                <div class="container">
                    <div class="d-flex">
                        <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                        <a class="header-brand" href="#">
                            <img src="{{ asset('images/Vepl.png') }}" class="header-brand-img desktop-lgo" alt="logo">
                            <img src="{{ asset('images/brand/logo1.png') }}" class="header-brand-img dark-logo"
                                alt=" logo">
                            <img src="{{ asset('images/brand/favicon.png') }}" class="header-brand-img mobile-logo"
                                alt=" logo">
                            <img src="{{ asset('images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo"
                                alt=" logo">
                        </a>
                        <div class="mt-1">
                            <form class="form-inline">
                                <div class="search-element">
                                    <!--<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
										<button class="btn btn-primary-color" type="submit">
											<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
												<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
											</svg>
										</button>-->
                                </div>
                            </form>
                        </div>
                        <!-- SEARCH -->
                        <div class="d-flex order-lg-2 ml-auto">
                            <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
                                <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%"
                                    width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                </svg>
                            </a>
                            <div class="dropdown   header-fullscreen">
                                <a class="nav-link icon full-screen-link p-0" id="fullscreen-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z" />
                                    </svg>
                                </a>
                            </div>
                            <!--<div class="dropdown header-notify">
									<a class="nav-link icon" data-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707C3.105 15.48 3 15.734 3 16v2c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-2c0-.266-.105-.52-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707C6.895 14.52 7 14.266 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zM12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22z"/></svg>
										<span class="pulse "></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
										<div class="dropdown-header">
											<h6 class="mb-0">Notifications</h6>
											<div>										
										<div class=" text-center p-2 border-top">
											<a href="#" class="">View All Notifications</a>
										</div>
									</div>
								</div>-->
                            <div class="dropdown profile-dropdown">
                                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                   <!-- <button class="border-transparent rounded-circle bg-white">
                                        <img class="h-7 w-7 rounded-circle" src="" alt="" />
                                    </button>-->

                                    <button
                                            class="border-transparent rounded-circle bg-white">
                                            <img class="h-7 w-7 rounded-circle "
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                src="" />
                                        </button>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                                    <div class="text-center">
                                        <a href="#"
                                            class="dropdown-item text-center user pb-0 font-weight-bold">{{ Auth::user()->name }}</a>
                                        <span class="text-center user-semi-title"></span>
                                        <div class="dropdown-divider"></div>
                                    </div>

                                   
                                  

                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                       
                                        <a class="dropdown-item d-flex" href="" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24"
                                                width="24">
                                                <g>
                                                    <rect fill="none" height="24" width="24" />
                                                </g>
                                                <g>
                                                    <path
                                                        d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
                                                </g>
                                            </svg>
                                            <div class="">Sign Out</div>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-->
            <!--/Horizontal-main -->
            <div class="sticky">
                <div class="horizontal-main hor-menu clearfix">
                    <div class="horizontal-mainwrapper container clearfix">
                        <!--Nav-->
                        <nav class="horizontalMenu clearfix">
                            <ul class="horizontalMenu-list">
                                <li aria-haspopup="true">
                                    <a href="{{ url('/') }}" class="sub-icon active">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                              
                                <li aria-haspopup="true">
                                    <a href="{{ url('/salesorderlist') }}" class="sub-icon active">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                                        </svg>
                                        Salesorder
                                    </a>
                                    <!-- <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{url('/viewdivision')}}">View Division</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li aria-haspopup="true">
                                    <a href="{{ url('/turnoverlist') }}" class="sub-icon active">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                                        </svg>
                                        Turnover
                                    </a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="{{ url('/collectionlist') }}" class="sub-icon active">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                                        </svg>
                                        Collection
                                    </a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="" class="">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z" />
                                        </svg>
                                        Setup <i class="fa fa-angle-down horizontal-icon"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{url('/companylist')}}">Company</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{url('/unitlist')}}">Unit</a>
                                        <li aria-haspopup="true"><a href="{{url('/divisionlist')}}">Division</a></li>
                                       
                                        <li aria-haspopup="true"><a href="{{url('/fylist')}}">Financial Year</a>
                                        </li>
                                    </ul>
                                </li>



                                <!-- <li aria-haspopup="true">
                                    <a href="{{url('/sbitelephonic')}}" class="sub-icon">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z" />
                                        </svg>
                                        Recruitment
                                    </a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                                        </svg>
                                        HR
                                    </a>
                                </li> -->
                                <!-- <li aria-haspopup="true">
                                    <a href="#" class="sub-icon">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z" />
                                        </svg>
                                        Quality
                                    </a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z" />
                                        </svg>
                                        Accounts
                                    </a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon">
                                        <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z" />
                                            <circle cx="6.5" cy="11.5" r="1.5" />
                                            <circle cx="9.5" cy="7.5" r="1.5" />
                                            <circle cx="14.5" cy="7.5" r="1.5" />
                                            <circle cx="17.5" cy="11.5" r="1.5" />
                                        </svg>
                                        Settings
                                    </a>
                                </li> -->
                            </ul>
                        </nav>
                        <!--Nav-->
                    </div>
                </div>
            </div>
            <!--/Horizontal-main -->
            <!-- Hor-Content -->
            <div class="hor-content main-content">
                <div class="container" style="min-height:470px">
                    <!--Page header
							<div class="page-header">
							</div>-->
                    <!--End Page header-->
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header">
                                    @yield('header')
                                </div>
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </div><!-- end app-content-->
        </div>
        <!--Footer-->
        <footer class="footer main-footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2020 <a href="http://voltechgroup.com/">Voltechgroup</a>. Developed by <a
                            href="http://voltechgroup.com/">TeamERP</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div><!-- End Page -->
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>
    <!--  @stack('scripts')-->
    <!-- Jquery js-->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap4 js-->
    <script src="{{ asset('plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--Othercharts js-->
    <script src="{{ asset('plugins/othercharts/jquery.sparkline.min.js') }}"></script>
    <!-- Circle-progress js-->
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <!-- Jquery-rating js-->
    <script src="{{ asset('plugins/rating/jquery.rating-stars.js') }}"></script>
    <!--Horizontal-menu js-->
    <script src="{{ asset('plugins/horizontal-menu/horizontal-menu.js') }}"></script>
    <!-- P-scroll js
    <script src="{{ asset('plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <script src="{{ asset('plugins/p-scrollbar/p-scroll.js') }}"></script> -->
    <!-- stiky js-->
    <script src="{{ asset('js/stiky.js') }}"></script>
    <!-- Simplebar JS
    <script src="{{ asset('plugins/simplebar/js/simplebar.min.js') }}"></script>  -->
    <!-- Custom js-->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- Switcher js
    <script src="{{ asset('switcher/js/switcher.js') }}"></script> -->
    <!-- INTERNAL Timepicker js 
    <script src="{{ asset('plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('plugins/time-picker/toggles.min.js') }}"></script> -->
    <!-- INTERNAL Datepicker js -->
    <script src="{{ asset('plugins/date-picker/date-picker.js') }}"></script>
    <script src="{{ asset('plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('plugins/input-mask/jquery.maskedinput.js') }}"></script>
    <!-- INTERNAL File-Uploads Js
    <script src="{{ asset('plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('plugins/fancyuploder/fancy-uploader.js') }}"></script> -->
    <!-- INTERNAL File uploads js 
    <script src="{{ asset('plugins/fileupload/js/dropify.js') }}"></script>
    <script src="{{ asset('js/filupload.js') }}"></script> -->
    <!-- INTERNAL Data tables -->
    <script src="{{ asset('plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <!--<script src="{{ asset('plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/buttons.colVis.min.js') }}"></script>-->
    <script src="{{ asset('plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
