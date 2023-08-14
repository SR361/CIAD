<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SignUp</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    {{-- Data Picker ================================================ --}}
    <link rel="stylesheet" href="{{ asset('assets/css/datapicker/colorpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datapicker/datepicker3.css') }}">


    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        .alert-title {
            background: #f9cece !important;
            width: 70% !important;
            border-radius: 4px !important;
            padding: 5px !important;
            margin-bottom: 5px !important;
        }
        .alert-title p{
            line-height: unset !important;
            margin-bottom: 0px !important;
        }
    </style>
</head>

<body>
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Registration</h3>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('signup.submit') }}" id="loginForm" method="post">
                            @csrf
                            <div class="row">
                                <div class="cold-md-6" style="padding: 15px;">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-mg-b alert-success-style4" style="padding: 10px;">
                                                <p>{{$error}}</p>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Sing Up as a </label>
                                    <div class="row">

                                        <div class="i-checks col-md-4">
                                            <label class="trainee-user-type">
                                                <input type="radio"  value="trainee" name="role_type">
                                                <i></i> Trainee
                                            </label>
                                        </div>
                                        <div class="i-checks col-md-4">
                                            <label class="university-user-type" >
                                                <input type="radio" value="university" name="role_type"> <i></i> University
                                            </label>
                                        </div>
                                        <div class="i-checks col-md-4">
                                            <label class="hospital-user-type" >
                                                <input type="radio" value="hospital" name="role_type"> <i></i> Hospital
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email">
                                </div>
                                <div class="trainee-field-section">
                                    {{-- <input type="hidden" name="role" value="trainee"> --}}
                                    <input type="hidden" name="role" value="trainee">
                                    <div class="form-group col-lg-12">
                                        <label>Date Of Birth</label>
                                        <div class="input-mark-inner mg-b-22">
                                            <input name="dob" type="text" class="form-control datepicker" data-mask="99/99/9999" placeholder="" data-provide="datepicker">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>University </label>
                                        <input type="text" name="university" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Roll number </label>
                                        <input class="form-control" type="number" name="rollnumber">
                                    </div>
                                </div>
                                <div class="university-field-section">
                                    <input type="hidden" name="role" value="university">
                                    <div class="form-group col-lg-12">
                                        <label>University Name</label>
                                        <input class="form-control" type="text" name="university_name">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Job Title</label>
                                        <input class="form-control" type="text" name="job_title">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>University ID Number</label>
                                        <input class="form-control" type="text" name="university_id">
                                    </div>
                                </div>
                                <div class="hospital-field-section">
                                    <input type="hidden" name="role" value="hospital">
                                    <div class="form-group col-lg-12">
                                        <label>Hospital Name </label>
                                        <input class="form-control" type="text" name="hospital_name">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Job Title</label>
                                        <input class="form-control" type="text" name="hospital_job_title">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Hospital ID Number</label>
                                        <input class="form-control" type="text" name="hospital_id">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn" type="submit">Register</button>

                            </div>
                            <br>
                            <center>
                                <span>Are you a member? <a href="{{ route('signpage') }}">Login now</a></span>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
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
    {{-- Data Picker ================================================ --}}
    <script src="{{ asset('assets/js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datapicker/datepicker-active.js') }}"></script>
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

    <script>
        $('.university-field-section').hide();
        $('.hospital-field-section').hide();

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
        $('.trainee-user-type ins').click(function(){
            trainee();
        })

        $('.university-user-type ins').click(function(){
            university();
        })

        $('.hospital-user-type ins').click(function(){
            hospital();
        })

        $('.trainee-user-type').click(function(){
            trainee();
        })

        $('.university-user-type').click(function(){
            university();
        })

        $('.hospital-user-type').click(function(){
            hospital();
        })

        function trainee(){
            $('.trainee-field-section').show();
            $('.university-field-section').hide();
            $('.hospital-field-section').hide();
        }

        function university(){
            $('.trainee-field-section').hide();
            $('.university-field-section').show();
            $('.hospital-field-section').hide();
        }

        function hospital(){
            $('.trainee-field-section').hide();
            $('.university-field-section').hide();
            $('.hospital-field-section').show();
        }

    </script>
</body>

</html>
