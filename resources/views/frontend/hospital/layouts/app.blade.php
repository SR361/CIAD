<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CIAD - Hospital</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">
        <!-- Google Fonts ============================================ -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
        <!-- animate CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <!-- normalize CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
        <!-- main CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <!-- morrisjs CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS  ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
        <!-- forms CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css') }}">
        <!-- style CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- responsive CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- modernizr JS ============================================ -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

<body>
    @include('frontend.hospital.layouts.sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ route('hospital.dashboard') }}">
                            <img class="main-logo" src="{{ asset('assets/img/logo/logo.png')}}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.hospital.layouts.header')
        @yield('section')

    </div>
    @include('frontend.hospital.layouts.footer')

    <!-- jquery ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS ============================================ -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- calendar JS ============================================ -->
        <script src="{{ asset('assets/js/calendar/moment.min.js')}}"></script>
        <script src="{{ asset('assets/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('assets/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- sparkline JS ============================================ -->
        <script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('assets/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- wow JS ============================================ -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- price-slider JS ============================================ -->
        <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS ============================================ -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS ============================================ -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS ============================================ -->
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS ============================================ -->
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS ============================================ -->
        <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS ============================================ -->
        <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS ============================================ -->
        <script src="{{ asset('assets/js/tab.js')}}"></script>
    <!-- icheck JS ============================================ -->
        <script src="{{ asset('assets/js/icheck/icheck.min.js')}}"></script>
        <script src="{{ asset('assets/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS ============================================ -->
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <!-- main JS ============================================ -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
    <!-- float JS ============================================ -->
        <script src="{{ asset('assets/js/flot/jquery.flot.js')}}"></script>
        <script src="{{ asset('assets/js/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{ asset('assets/js/flot/curvedLines.js')}}"></script>
        <script src="{{ asset('assets/js/flot/flot-active.js')}}"></script>
</body>

</html>
