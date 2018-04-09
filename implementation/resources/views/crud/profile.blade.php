@extends('layouts.app')

@section('title', '| Profile')

@section('content')
<link href="<?php echo e(asset('css/profile.css')); ?>" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <p class=" text-info"><?php echo "Today is " . date("Y/m/d") . "<br>"; ?></p>
        </div>
        <div style="margin-top: 20px"
             class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center">
                    <h3 class="panel-title">{{Auth::user()->full_name}} Profile</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img style="width: 100px; border-radius: 50%"
                                 alt="User Pic"
                                 src="{{ asset('images/user.jpg') }}"
                                 class="img-circle img-responsive">
                        </div>
                        <div class="col-md-9 col-lg-9">
                            <table class="table table-user-information">
                                <tbody>
                                <div class="table">
                                    <tr>
                                        <td>
                                            {{__('User Name')}}:
                                        </td>
                                        <td>
                                            <label id="user_name">{{Auth::user()->user_name}}</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Email:
                                        </td>

                                        <td>
                                            <label id="email">{{Auth::user()->email}}</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            {{__('Date of Birth')}}:
                                        </td>

                                        <td>
                                            {{Auth::user()->date_of_birth}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            {{__('Role')}}:
                                        </td>

                                        <td>
                                            @if(Auth::user()->role_id === 1)
                                            {{__('Student')}}
                                            @elseif(Auth::user()->role_id === 2)
                                            {{__('Teacher')}}
                                            @endif
                                        </td>
                                    </tr>
                                </div>

                                </tbody>
                            </table>
                            <a href="/user/edit" class="btn btn-primary">Edit Information Profile</a>
                            <a style="margin-top: 2px;" href="/home" class="btn btn-primary">Back To Home Page</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection