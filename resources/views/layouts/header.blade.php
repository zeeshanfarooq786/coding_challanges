<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Oxford Business College</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}">

        <!-- plugin css -->
        <link rel="stylesheet" type="text/css"  href="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"/>
        <!-- select2 css -->
        <link  rel="stylesheet" type="text/css" href="{{ asset('libs/select2/css/select2.min.css')}}" />
        <!-- dropzone css -->
        <link  rel="stylesheet" type="text/css" href="{{ asset('libs/dropzone/min/dropzone.min.css')}}" />
        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
         <!-- Custom Css-->
         <link href="{{ asset('css/custom.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
          <!-- Begin page -->
          <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('images/logo.png')}}" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('images/logo.png')}}" alt="" height="24"> <span class="logo-txt"></span>
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('images/logo.png')}}" alt="" height="30" width="100">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('images/logo.png')}}" alt="" height="50" width="150"> <span class="logo-txt"></span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars" style="margin-left: 35px;"></i>
                        </button>

                        {{-- <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form> --}}
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                
                                <div data-simplebar style="max-height: 230px;">
                                  

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{ asset('images/users/avatar-6.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>

                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('images/users/avatar-1.jpg')}}"
                                    alt="Header Avatar">
                                {{-- <span class="d-none d-xl-inline-block ms-1 fw-medium">{{$userName}}</span> --}}
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                {{-- <!-- item-->
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="{{route('lock_screen')}}"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a> --}}
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="{{route('logout')}}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a> --}}
                                <form method="POST" action="" class="d-inline">
                                    @csrf
                                    {{-- <button type="submit" class="dropdown-item" style="border: none; background: none; cursor: pointer;">
                                        <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout
                                    </button> --}}
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>