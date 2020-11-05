@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/template/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/template/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/template/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/template/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/template/css/util.css">
	<link rel="stylesheet" type="text/css" href="/template/css/main.css">
</head>
<body>
    
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/template/images/img-01.png" alt="IMG">
				</div>

                <span class="login100-form-title">
						Silahkan Login
					</span>

                <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="wrap-input100 validate-input" data-validate = "Username harus diisi!">
						<input id="username" class="input100 @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fas fa-user" aria-hidden="true"></i>
						</span>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password harus diisi!">
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100 ">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
                        {{ __('Login') }}
						</button>
					</div>

					<div class="text-center p-t-12">
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                    @endif
					</div>
				</form>
			</div>
		</div>
	</div>
                                
@endsection

<script src="/template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/template/vendor/bootstrap/js/popper.js"></script>
	<script src="/template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/template/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/template/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>