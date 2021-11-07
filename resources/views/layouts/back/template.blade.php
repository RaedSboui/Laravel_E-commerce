<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="" type="image/ico" />

    <title>Best Store</title>

    <!-- Bootstrap -->
    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('back/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('back/css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('back/css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('back/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('back/css/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('back/css/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('back/css/custom.min.css')}}" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title">
                            <i class="fa fa-paw"></i> 
                            <span>Dashboard</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    @include('layouts.back.menu')
                    <br>
                    @include('layouts.back.sidebar')
                    @include('layouts.back.menu_footer')
                </div>
            </div>
            @include('layouts.back.navigation')
            @yield('content')
            @include("layouts.back.footer")
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('back/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('back/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('back/js/custom.min.js')}}"></script>
   
    @section('javascript')  
    @show
</body>
</html>
