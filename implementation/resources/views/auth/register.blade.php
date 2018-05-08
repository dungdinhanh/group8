@extends('layouts.app')
@section('title', '| Register')
@section('content')
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link href="<?php echo e(asset('css/register.css')); ?>" rel="stylesheet">
<div id="register">
    <div style="margin-top: 16px" class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <h4>Account<span class="require">*</span></h4>
                <!--            full_name-->
                <div class="input-group input-group-icon">
                    <input id="full_name" class="{{ $errors->has('full_name') ? ' is-invalid' : '' }}"
                           name="full_name"
                           value="{{ old('full_name') }}" required type="text" placeholder="Full Name"/>
                    @if ($errors->has('full_name'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('full_name') }}</strong>
                </span>
                    @endif
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <!--            email-->
                <div class="input-group input-group-icon">
                    <input id="email" type="email" placeholder="Email Adress"
                           class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           value="{{ old('email') }}" required/>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <!--            user_name-->
                <div class="input-group input-group-icon">
                    <input id="user_name" type="text"
                           class="{{ $errors->has('user_name') ? ' is-invalid' : '' }}"
                           name="user_name" value="{{ old('user_name') }}" placeholder="User Name" required autofocus/>
                    @if ($errors->has('user_name'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('user_name') }}</strong>
                </span>
                    @endif
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <!--            password-->
                <div class="input-group input-group-icon">
                    <input id="password" type="password" placeholder="Password"
                           class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" required/>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <!--            password-confirm-->
                <div class="input-group input-group-icon">
                    <input id="password-confirm" type="password" placeholder="Password confirm"
                           name="password_confirmation" required/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
            </div>

            <!--        Date of Birth and Role-->
            <div class="row">
                <div class="col-half">
                    <h4>Date of Birth<span class="require">*</span></h4>
                    <div class="input-group">
                        <div class="col-third">
                            <input id="date_of_birth" type="date" name="date_of_birth" required/>
                        </div>

                    </div>
                </div>
                <div class="col-half">
                    <h4>Role<span class="require">*</span></h4>
                    <div id="role_id" class="input-group">
                        <input type="radio" value="1" id="gender-male" name="role_id" required/>
                        <label for="gender-male">Student</label>
                        <input type="radio" value="2" id="gender-female" name="role_id" required/>
                        <label for="gender-female">Teacher</label>
                    </div>
                </div>
            </div>

            <!--        Terms and Conditions-->
            <div class="row">
                <h4>Terms and Conditions<span class="require">*</span></h4>
                <div class="input-group">
                    <input type="checkbox" id="terms"/>
                    <label for="terms">I accept the terms and conditions for signing up to this service, and hereby
                        confirm
                        I have read the privacy policy.</label>
                </div>
            </div>

            <!--        submit-->
            <div class="row">
                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>
@endsection
