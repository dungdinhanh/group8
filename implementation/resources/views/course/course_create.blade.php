@extends('layouts.app')

@section('title', '|Courses')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('Edit Profile')}}
                    </div>

                    <div class="card-body">
                        <form method = post action="{{route('store_course')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="course_name" class="col-md-4 col-form-label text-md-right">
                                    {{__('Course name')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="course_name" type="text" class="form-control{{ $errors->has('full_name')? ' is-invalid' : '' }}"
                                           name="course_name"  required>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="max_students" class="col-md-4 col-form-label text-md-right">
                                    {{__('Max student')}}
                                </label>

                                <div class="col-md-6">
                                    <input id="max_students" type="number" min="20" class="form-control{{ $errors->has('user_name')? ' is-invalid':''}}"
                                           name="max_students"  required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="max_groups" class="col-md-4 col-form-label text-md-right">
                                    {{__('Max groups')}}
                                </label>

                                <div class="col-md-6">
                                    <input id="max_groups" type="number" min="1" class="form-control {{$errors->has('email')? ' is-invalid':''}}"
                                           name = "max_groups" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start_date" class="col-md-4 col-form-label text-md-right">
                                    {{__('Start date')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="start_date"
                                           type="date"
                                           class="form-control"
                                           name="start_date"
                                           min="{{date("Y-m-d")}}"
                                           value="{{date("Y-m-d")}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end_date" class="col-md-4 col-form-label text-md-right">
                                    {{__('End Date')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="end_date"
                                           type="date"
                                           class="form-control"
                                           name="end_date"
                                           min="{{date("Y-m-d")}}"
                                           value="{{date("Y-m-d")}}" required>
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