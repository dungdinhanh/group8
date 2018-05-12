@extends('layouts.app')

@section('title', '|Courses')

@section('content')
<div id="page" class="container-fluid">
    <header id="page-header" class="row">
        <div class="col-xs-12 p-a-1" id="yui_3_17_2_1_1524824525822_765">
            <div class="card" id="yui_3_17_2_1_1524824525822_764">
                <div class="card-block" id="yui_3_17_2_1_1524824525822_763">
                    <div class="pull-xs-right context-header-settings-menu"></div>
                    <div class="pull-xs-left">
                        <div class="page-context-header">
                            <div class="page-header-image">
                                <a href="#">
                                    <img src="{{ asset('images/user.jpg') }}"
                                         alt="Anna Alexander" title="Anna Alexander" class="userpicture" width="100"
                                         height="100">
                                </a>
                            </div>
                            <div class="page-header-headings">
                                <h1>{{Auth::user()->user_name}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix w-100 pull-xs-left" id="page-navbar">
                        <div class="breadcrumb-nav">
                            <nav role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/home">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">{{__('Create Course')}}</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="breadcrumb-button pull-xs-right"></div>
                    </div>
                    <div id="course-header"></div>
                </div>
            </div>
        </div>
    </header>

    <div id="page-content" class="row">
        <div id="region-main-box" class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h2 id="yui_3_17_2_1_1524824525822_418">
                        {{__('Create Course')}}
                    </h2>
                </div>

                <div class="card-body">
                    <form method=post action="{{route('store_course')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="course_name" class="col-md-4 col-form-label text-md-right">
                                {{__('Course name')}}
                            </label>
                            <div class="col-md-6">
                                <input id="course_name" type="text"
                                       class="form-control{{ $errors->has('full_name')? ' is-invalid' : '' }}"
                                       name="course_name" required>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="max_students" class="col-md-4 col-form-label text-md-right">
                                {{__('Max student')}}
                            </label>

                            <div class="col-md-6">
                                <input id="max_students" type="number" min="20"
                                       class="form-control{{ $errors->has('user_name')? ' is-invalid':''}}"
                                       name="max_students" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="max_groups" class="col-md-4 col-form-label text-md-right">
                                {{__('Max groups')}}
                            </label>

                            <div class="col-md-6">
                                <input id="max_groups" type="number" min="1"
                                       class="form-control {{$errors->has('email')? ' is-invalid':''}}"
                                       name="max_groups" required>
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
                                       min="{{date(" Y-m-d")}}"
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
                                       min="{{date(" Y-m-d")}}"
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
