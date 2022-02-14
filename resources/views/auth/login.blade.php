<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | Ar-Risalah Dormitory</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="{{ asset('assets/login/js/main.js') }}"></script>
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="login100-pic js-tilt" data-tilt>
						<img src="assets/login/images/logo arisalah.png" alt="IMG">
					</div>
				</br>
				<span class="login100-form-title">
					Admin Login
				</span>

				<div class="wrap-input100">
					<input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" id="email">
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
						<input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" id="password">
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

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                        	@if (Route::has('password.request'))
								<a class="txt2" href="{{ route('password.request') }}">
								Username / Password?
								</a>
                        	@endif
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