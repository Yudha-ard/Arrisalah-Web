<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Ar-Risalah Dormitory</title>
    <!--CSS-->
    <link rel="icon" type="image/png" href="{{ asset('assets/login/images/Logo PPDU.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/sweetalert/sweetalert.css') }}">
    <!--Javascript-->
    <script src="{{ asset('assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{ asset('assets/login/js/main.js') }}"></script>
</head>
<body>  
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                </br>
                <span class="login100-form-title">
                    Register Member
                </span>

                <div class="wrap-input100">
                    <input class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Name"  required="" id="name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-users" aria-hidden="true"></i>
                    </span>
                    @if ($errors->has('name'))
                        <script>
                            swal('Warning!', '{{ $errors->first('name') }}', 'error');
                        </script>
                    @endif
                    </div>

                <div class="wrap-input100">
                    <input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email"  required="" id="email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    @if ($errors->has('email'))
                        <script>
                            swal('Warning!', '{{ $errors->first('email') }}', 'error');
                        </script>
                    @endif
                    </div>

                    <div class="wrap-input100">
                        <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password"  required="" id="password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        @if ($errors->has('password'))
                        <script>
                            swal('Warning!', '{{ $errors->first('password') }}', 'error');
                        </script>    
                        @endif
                    </div>

                    <div class="wrap-input100">
                    <input class="input100{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" required="" autocomplete="new-password" placeholder="Password Confirm">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                    @if ($errors->has('password-confirm'))
                        <script>
                            swal('Warning!', '{{ $errors->first('password-confirm') }}', 'error');
                        </script>
                    @endif
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                        <br>
                        <a class="mt-5" href="{{ url('/dashboard') }}"><i class="fa fa-home"></i>  Back</a>
                    </div>
                    <div class="text-center p-t-50" style="font-weight:bolder;">
                        
                    </div>
                </form>
            </div>
            </center>
        </div>
    </div>
@include('sweet::alert')    
</body>
</html>