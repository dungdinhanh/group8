@extends('layouts.app')

@section('title', '| Edit Profile')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('Edit Profile')}}
                    </div>

                    <div class="card-body">
                        <form method = post action="{{route('edit_profile_handle')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">
                                    {{__('Full Name')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="full_name" type="text" class="form-control{{ $errors->has('full_name')? ' is-invalid' : '' }}"
                                           name="full_name" value="{{Auth::user()->full_name}}" required>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="user_name" class="col-md-4 col-form-label text-md-right">
                                    {{__('User Name')}}
                                </label>

                                <div class="col-md-6">
                                    <input id="user_name" type="text" class="form-control{{ $errors->has('user_name')? ' is-invalid':''}}"
                                           name="user_name" value="{{Auth::user()->user_name}}" disabled>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    {{__('Email')}}
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control {{$errors->has('email')? ' is-invalid':''}}"
                                           name = "email" value="{{Auth::user()->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">
                                    {{__('Date Of Birth')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{Auth::user()->date_of_birth}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for= "role_id" class="col-md-4 col-form-label text-md-right">
                                    {{__('Role')}}
                                </label>
                                <div class="col-md-6">
                                    <select id = "role_id" name="role_id" class="form-control" value="{{Auth::user()->role_id}}">
                                        <option value="1">Student</option>
                                        <option value="2">Teacher</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('Save Change')}}
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
