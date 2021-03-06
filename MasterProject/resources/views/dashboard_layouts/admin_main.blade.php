<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('dashboard_theme/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('dashboard_theme/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('dashboard_theme/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('dashboard_theme/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="/dashboard/admin">
                        <img src="{{asset('assets/img/FustanekDashmob.png')}}" alt="Logo" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">

                    <li>
                        <a href="">{{ Auth::guard('admin')->user()->fullname }}</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="/dashboard/admin">
                            <i class="fas fa-tachometer-alt"></i>Admins</a>
                    </li>
                    <li>
                        <a href="/dashboard/manage_user">
                            <i class="fas fa-users"></i>Users</a>
                    </li>
                    <li>
                        <a href="/dashboard/category">
                            <i class="fas fa-chart-bar"></i>Categories</a>
                    </li>
                    <li>
                        <a href="/dashboard/manage_products">
                            <i class="fab fa-product-hunt"></i>Products</a>
                    </li>
                    <li>
                        <a href="/orders">
                            <i class="fas fa-box"></i>Orders</a>
                    </li>
    <li>
        <a class="dropdown-item" href="/adminLogout"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="/adminLogout" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
                        </ul>

            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <img src="{{asset('assets/img/FustanekDash.png')}}" alt="Logo" title="">
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">

                    <li>
                        <a href="/dashboard/admin">
                            <i class="fas fa-tachometer-alt"></i>Manage Admin</a>
                    </li>

                    <li>
                        <a href="/dashboard/manage_user">
                            <i class="fas fa-users"></i>Manage Users</a>
                    </li>

                    <li>
                        <a href="/dashboard/category">
                            <i class="fas fa-chart-bar"></i>Manage Category</a>
                    </li>

                    <li>
                        <a href="/dashboard/manage_products">
                            <i class="fab fa-product-hunt"></i>Manage Products</a>
                    </li>

                    <li>
                        <a href="/orders">
                            <i class="fas fa-box"></i>Manage Orders</a>
                    </li>


                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop d-none d-lg-block d-xl-block">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">

                        </form>

                        <div class="header-button">

                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">welcome  {{ Auth::guard('admin')->user()->fullname }}</a>

                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">

                                            <h5 class="name">
                                                <a href="">{{ Auth::guard('admin')->user()->fullname }}</a>
                                            </h5>
                                            <span class="email">{{session('admin_email')}}</span>

                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="/adminLogout"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="/adminLogout" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">




                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('dashboard_theme/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('dashboard_theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('dashboard_theme/vendor/slick/slick.min.js')}}">
</script>
<script src="{{ asset('dashboard_theme/vendor/wow/wow.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{ asset('dashboard_theme/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{ asset('dashboard_theme/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{ asset('dashboard_theme/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
