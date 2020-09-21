<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo-small.png">
    <link rel="icon" type="image/png" href="./assets/img/logo-small.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    @toastr_css
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('./assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('./assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('./assets/demo/demo.css')}}" rel="stylesheet" />
{{--    <link rel="stylesheet" href="{{asset('assets/scss/my.scss')}}">--}}
    <base href="{{asset('')}}">
    <style>

    </style>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="{{route('rooms.index')}}" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="./assets/img/benhvien.jpeg">
                </div>
                <!-- <p>CT</p> -->
            </a>
            <a href="{{route('rooms.index')}}" class="simple-text logo-normal">
                Bệnh viện dã chiến
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li >
                    <a href="{{route('rooms.index')}}">
                        <i class="nc-icon nc-bank"></i>
                        <p>Phòng bệnh</p>
                    </a>
                <li >
                    <a href="{{route('beds.index')}}">
                        <i class="fa fa-bed"></i>
                        <p>Giường bệnh</p>
                    </a>
                <li >
                    <a href="{{route('patients.index')}}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Bệnh nhân</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="{{route('rooms.index')}}">Trang chủ</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form method="get" action="{{route('patients.search')}}">
                        <div class="input-group no-border">
                            <input type="text" name="keyword" value="{{old('keyword')}}" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item btn-rotate dropdown">
                            <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" style="color: green"><i class="nc-icon nc-single-02">
                                </i>{{\Illuminate\Support\Facades\Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('users.logout') }}">log out </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content" >
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js"></script>
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
<script src="./assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="./assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
{{--<script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>--}}
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
      integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"/>

<script src="{{asset('./assets/js/my.js')}}"></script>
</body>
@jquery
@toastr_js
@toastr_render
</html>

