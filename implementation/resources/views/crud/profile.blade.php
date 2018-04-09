@extends('layouts.app')
@section('title', '| Profile')

@section('content')

<div class="container">

    <div class="col-md-8">

        <div class="card">
            {{--<div class="card-header">{{__('Profile')}}</div>--}}
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 text-md-left nav-link">
                        {{__('Profile')}}
                    </div>
                    <div class="col-md-6 text-md-right nav-link">
                        <a  href="{{route('edit_profile')}}">
                            {{__('Edit Profile')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class = card-body>
                <div class="table">
                    @csrf
                    <div class="row">
                        <label for="full_name" class="col-md-6 col-form-label text-md-center">
                            {{__('Full Name')}}
                        </label>
                        <div class="col-md-6 col-form-label text-md-right">
                            <label id="full_name">{{Auth::user()->full_name}}</label>
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <label class="col-md-6 col-form-label text-md-center">
                            {{__('User Name')}}
                        </label>
                        <div class="col-md-6 col-form-label text-md-right">
                            <label id="user_name">{{Auth::user()->user_name}}</label>
                        </div>
                        <hr>
                    </div>

                    <div class="row">
                        <label class="col-md-6 col-form-label text-md-center">
                            Email
                        </label>

                        <div class="col-md-6 col-form-label text-md-right">
                            <label id="email">{{Auth::user()->email}}</label>
                        </div>
                    </div>


                    <div class="row">
                        <label class="col-md-6 col-form-label text-md-center">
                            {{__('Date of Birth')}}
                        </label>

                        <label class="col-md-6 col-form-label text-md-right">
                            {{Auth::user()->date_of_birth}}
                        </label>
                    </div>


                    <div class="row">
                        <label class="col-md-6 col-form-label text-md-center">
                            {{__('Role')}}
                        </label>

                        <label class="col-md-6 col-form-label text-md-right">
                            @if(Auth::user()->role_id === 1)
                                {{__('Student')}}
                            @elseif(Auth::user()->role_id === 2)
                                {{__('Teacher')}}
                            @endif
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection