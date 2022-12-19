@php
   $userstateid = Auth::user()->state_id;
   $username =  Auth::user()->name;
   $userstate = DB::table('states')
   ->where('id', '=', $userstateid)
   ->get()->first();
@endphp


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">

    <title>VOMS</title>
    <link rel="apple-touch-icon" href="{{  asset('public/backend/app-assets/images/ico/apple-icon-120.png')  }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{  asset('public/backend/app-assets/images/ico/favicon.ico')  }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/vendors.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')  }}">



    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/vendors/css/forms/select/select2.min.css')  }}">


    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/bootstrap.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/bootstrap-extended.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/colors.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/components.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/themes/dark-layout.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/themes/bordered-layout.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/themes/semi-dark-layout.css')  }}">



    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/core/menu/menu-types/vertical-menu.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/plugins/forms/pickers/form-pickadate.css')  }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/core/menu/menu-types/vertical-menu.css')  }}"> --}}


    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/assets/css/style.css')  }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{  asset('public/backend/app-assets/css/core/menu/menu-types/vertical-menu.css')  }}> --}}
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>


            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-nigeria"></i><span class="selected-language">{{$userstate->name}}</span></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Search" tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>


                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{$username}}</span><span class="user-status"></span></div><span class="avatar"><img class="round" src="{{  asset('public/backend/app-assets/images/portrait/small/john.jpg')  }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href={{ URL::to('/admin/logout') }}><i class="me-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="url"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1"   height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">VOMS</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <!-- BEGIN: dashboard menu-->
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <!-- BEGIN: analytics-->
                <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href={{ URL::to('/admin/dashboard') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                        </li>

                    </ul>
                </li>

{{-- <!-- BEGIN: Locations-->
                <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Locations</span></a>
                    <ul class="menu-content">

                        <!-- BEGIN: States-->
                        <li><a class="d-flex align-items-center" href={{ URL::to('/admin/state/all') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"> States</span></a>
                        </li>



                    </ul>
                </li>



                <!-- BEGIN: Owners-->
                <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Owners</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href={{ URL::to('/admin/owner/all') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">All Owners</span></a>
                        </li>

                    </ul>
                </li>


                  <!-- BEGIN: Dealers-->
                  <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dealers</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href={{ URL::to('/admin/dealer/all') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">All Dealers</span></a>
                        </li>

                    </ul>
                </li>
 --}}

                    <!-- BEGIN: Vehicles-->
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Vehicles</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href={{ URL::to('/admin/vehicle/all') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">MY Vehicles</span></a>
                            </li>

                        </ul>
                    </li>


                           <!-- BEGIN: Certificates-->
                           <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Certificates</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href={{ URL::to('/admin/certificate/all') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">MY Certificates</span></a>
                                </li>

                            </ul>
                        </li>




                         {{-- <!-- BEGIN: Users-->
                <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Role & Permissions</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('users.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Users</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="{{ route('roles.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Role</span></a>
                        </li>

                    </ul>
                </li> --}}








                 {{-- <!-- BEGIN: Disbursement-->
                 <li class=" nav-item"><a class="d-flex align-items-center" href="/"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Disbursement Management</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href={{ URL::to('/admin/state/all') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Disburse funds</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href={{ URL::to('/admin/state/all') }}><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Add Receivables</span></a>
                        </li>


                    </ul>
                </li> --}}




            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('admin_content')

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ms-25" href="#" target="_blank">JPMB Technologies</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{  asset('public/backend/app-assets/vendors/js/vendors.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/pickers/pickadate/picker.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/pickers/pickadate/picker.date.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/pickers/pickadate/picker.time.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/pickers/pickadate/legacy.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/js/scripts/forms/pickers/form-pickers.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/forms/select/select2.full.min.js')  }}"></script>




    <!-- BEGIN Vendor JS-->
    <script src="{{  asset('public/backend/app-assets/js/scripts/forms/form-select2.js')  }}"></script>
    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{  asset('public/backend/app-assets/js/core/app-menu.js')  }}"></script>
    {{-- <script src="{{  asset('public/backend/app-assets/vendors/js/jquery/jquery.min.js')  }}"></script> --}}
    <script src="{{  asset('public/backend/app-assets/vendors/js/popper/popper.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/js/core/app.js')  }}"></script>


    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap5.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/jszip.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')  }}"></script>


    <script src="{{  asset('public/backend/app-assets/js/scripts/tables/table-datatables-basic.js')  }}"></script>
    <script src="{{  asset('public/backend/app-assets/js/scripts/tables/table-datatables-advanced.js')  }}"></script>






    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->



</body>
<!-- END: Body-->

</html>
