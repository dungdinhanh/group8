@extends('layouts.app')
@section('title', '| Login')
@section('content')
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
      href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
      href="<?php echo e(asset('fonts/iconic/css/material-design-iconic-font.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
<link href="<?php echo e(asset('css/login-pr1.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/login-pr2.css')); ?>" rel="stylesheet">

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg')">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf

                <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input id="user_name" class="input100{{ $errors->has('user_name') ? ' is-invalid' : '' }}"
                           placeholder="Username" type="text" name="user_name" value="{{ old('user_name') }}" required>
                    @if ($errors->has('user_name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('user_name') }}</strong>
                        <script>
                            swal({
                                title: "Login error!",
                                text: "Login error",
                                icon: "error",
                                button: "try again!",
                            });
                        </script>

                    </span>
                    @endif
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"
                           type="password" name="password" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100 {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}" id="ckb1" type="checkbox" name="remember">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>

                <div style="padding-top: 20px" class="text-center p-t-90">
                    <a class="txt1" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>

                <div style="padding-top: 20px" class="text-center">
                    <a class="txt1" href="{{ route('register') }}">
                        {{ __('Not register yet! Register Now') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('vendor/bootstrap/js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('vendor/daterangepicker/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
@endsection
