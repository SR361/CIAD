<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">
        <!-- Google Fonts
            ============================================ -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
        <!-- forms CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css') }}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    {{-- <a href="index.html" class="btn btn-primary">Back to Dashboard</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    {{-- <h3>PLEASE LOGIN TO APP</h3> --}}
                </div>
                <div class="hpanel">
                    <div class="panel-body">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-success-style1">
                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">×</span>
                                    </button>
                                <p><strong>Success!</strong> {{$message}}</p>
                            </div>
                        @endif
                        <form action="{{ route('signin.submit') }}" id="loginForm" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="email" required="" name="email" class="form-control">
                                {{-- <span class="help-block small">Your unique username to app</span> --}}
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" required="" name="password" class="form-control">
                                {{-- <span class="help-block small">Yur strong password</span> --}}
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="{{ url('/signup') }}">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © 2023 <a href="https://smarttechnica.com">Smart Technica</a> All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js')}}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{ asset('assets/js/tab.js')}}"></script>
        <!-- icheck JS
            ============================================ -->
        <script src="{{ asset('assets/js/icheck/icheck.min.js')}}"></script>
        <script src="{{ asset('assets/js/icheck/icheck-active.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>
