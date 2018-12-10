

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/icon/icofont/css/icofont.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/pages/menu-search/css/component.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/css/jquery.mCustomScrollbar.css')}}">
    <title>TAW-PROYECTO</title>
  </head>
  
    
    <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                        <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<!--                                         <span>{{auth()->user()->name}}</span> -->
                                        <i class="ti-angle-down"></i>
                                    </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                        <i class="ti-layout-sidebar-left"></i> Cerrar Sesion
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- search -->
                        <!-- search end -->
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Funciones</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="/Alumnos">
                                        <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Incio</span>
                                    </a>
                                    <a href="/Alumnos/Modulos">
                                        <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Modulos</span>
                                    </a>
                                    <a href="/Alumnos/Avance">
                                        <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Avance</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                      @yield('content')
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>

<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('/bower_components/modernizr/js/modernizr.js')}}"></script>
    <!-- am chart -->
    <script src="{{asset('/default/assets/pages/widget/amchart/amcharts.min.js')}}"></script>
    <script src="{{asset('/default/assets/pages/widget/amchart/serial.min.js')}}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('bower_components/chart.js/js/Chart.js')}}"></script>
    <!-- Todo js -->
    <script type="text/javascript" src="{{asset('/default/assets/pages/todo/todo.js')}} "></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('/bower_components/i18next/js/i18next.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/SmoothScroll.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/pcoded.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/demo-12.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/script.min.js')}}"></script>


  
</html>