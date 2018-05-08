@extends('layouts.app')

@section('title', '| Edit Profile')

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
                                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#">Edit profile</a></li>
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
            <section id="region-main">
                <div class="card card-block" id="yui_3_17_2_1_1524824525822_64">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main" id="yui_3_17_2_1_1524824525822_63">
                        <span id="maincontent"></span>
                        <h2 id="yui_3_17_2_1_1524824525822_418">
                            {{__('Edit Profile')}}
                        </h2>
                        <form method=post action="{{route('edit_profile_handle')}}" accept-charset="utf-8" id="mform1"
                              class="mform">
                            @csrf
                            <fieldset class="clearfix collapsible" id="id_moodle">
                                <legend class="ftoggler">
                                    <a href="#" class="fheader" role="button"
                                       aria-controls="id_moodle" aria-expanded="true"
                                       id="yui_3_17_2_1_1524824525822_61">
                                        General
                                    </a>
                                </legend>
                                <div class="fcontainer clearfix" id="yui_3_17_2_1_1524824525822_393">
                                    <div class="form-group row  fitem   ">
                                        <div class="col-md-3">
                                              <span class="pull-xs-right text-nowrap">

                                                  <a class="btn btn-link p-a-0" role="button" data-container="body"
                                                     data-toggle="popover"
                                                     data-placement="right"
                                                     data-content="<div class=&quot;no-overflow&quot;><p>Please be aware that some authentication plugins will not allow you to change the username.</p>
                                                      </div> " data-html="true" tabindex="0" data-trigger="focus">
                                                  <i class="icon question circle outline text-info fa-fw  "
                                                     aria-hidden="true"
                                                     title="Help with Username"
                                                     aria-label="Help with Username"></i>
                                                 </a>
                                              </span>
                                            <label class="col-form-label d-inline " for="id_username">
                                                {{__('Full Name')}}
                                            </label>
                                        </div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="text">
                                            <input type="text"
                                                   class="form-control{{ $errors->has('full_name')? ' is-invalid' : '' }}"
                                                   name="full_name" id="full_name"
                                                   value="{{Auth::user()->full_name}}" required size="20">
                                            <div class="form-control-feedback" id="id_error_username"
                                                 style="display: none;">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row  fitem ">
                                        <div class="col-md-3">
                                            <span class="pull-xs-right text-nowrap">
                                                <abbr class="initialism text-danger" title="Required">
                                                    <i class="icon question circle outline text-danger fa-fw "
                                                       aria-hidden="true" title="Required"
                                                       aria-label="Required"></i>
                                                </abbr>
                                            </span>
                                            <label class="col-form-label d-inline " for="id_lastname">
                                                {{__('User Name')}}
                                            </label>
                                        </div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="text">
                                            <input type="text"
                                                   class="form-control{{ $errors->has('user_name')? ' is-invalid':''}} "
                                                   name="user_name" id="user_name"
                                                   value="{{Auth::user()->user_name}}" disabled size="30"
                                                   maxlength="100">
                                            <div class="form-control-feedback" id="id_error_lastname"
                                                 style="display: none;">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  fitem   ">
                                        <div class="col-md-3">
                                            <span class="pull-xs-right text-nowrap">
                                                <abbr class="initialism text-danger" title="Required">
                                                    <i class="icon question circle outline text-danger fa-fw"
                                                       aria-hidden="true" title="Required"
                                                       aria-label="Required"></i>
                                                </abbr>


                                            </span>
                                            <label class="col-form-label d-inline " for="id_email">
                                                {{__('Email')}}
                                            </label>
                                        </div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="text">
                                            <input type="text"
                                                   class="form-control{{$errors->has('email')? ' is-invalid':''}} "
                                                   name="email" id="email"
                                                   value="{{Auth::user()->email}}" size="30" maxlength="100">
                                            <div class="form-control-feedback" id="id_error_email"
                                                 style="display: none;">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  fitem   ">
                                        <div class="col-md-3">
                                            <span class="pull-xs-right text-nowrap">
                                            </span>
                                            <label class="col-form-label d-inline " for="id_maildisplay">
                                                {{__('Role')}}
                                            </label>
                                        </div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="select">
                                            <select class="custom-select" value="{{Auth::user()->role_id}}"
                                                    name="role_id" id="role_id">
                                                <option value="1">Student</option>
                                                <option value="2">Teacher</option>
                                            </select>
                                            <div class="form-control-feedback" id="role_id"
                                                 style="display: none;">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  fitem   ">
                                        <div class="col-md-3">
                                            <span class="pull-xs-right text-nowrap">
                                            </span>
                                            <label class="col-form-label d-inline " for="date_of_birth">
                                                {{__('Date Of Birth')}}
                                            </label>
                                        </div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="text">
                                            <input id="date_of_birth" type="date" class="form-control"
                                                   name="date_of_birth"
                                                   value="{{Auth::user()->date_of_birth}}">
                                            <div class="form-control-feedback" id="date_of_birth"
                                                 style="display: none;">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                            <fieldset class="clearfix collapsible" id="id_moodle_picture">
                                <legend class="ftoggler"><a href="#" class="fheader" role="button"
                                                            aria-controls="id_moodle_picture" aria-expanded="true"
                                                            id="yui_3_17_2_1_1524824525822_68">User picture</a></legend>
                                <div class="fcontainer clearfix">
                                    <div class="form-group row  fitem   ">
                                        <div class="col-md-3">
                                            <span class="pull-xs-right text-nowrap">
                                            </span>
                                            <span class="col-form-label d-inline-block ">
                                                Current picture
                                            </span>
                                        </div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="static">
                                            <div class="form-control-static">
                                                <a href="#">
                                                    <img src="{{ asset('images/user.jpg') }}"
                                                         alt="Anna Alexander" title="Anna Alexander"
                                                         class="userpicture" width="64" height="64">
                                                </a>
                                            </div>
                                            <div class="form-control-feedback" id="id_error_currentpicture"
                                                 style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row  fitem femptylabel  ">
                                <div class="col-md-3">
                                    <span class="pull-xs-right text-nowrap">
                                    </span>
                                    <label class="col-form-label d-inline " for="id_submitbutton">

                                    </label>
                                </div>
                                <div class="col-md-9 form-inline felement" data-fieldtype="submit">
                                    <input type="submit" class="btn btn-primary" name="submitbutton"
                                           id="id_submitbutton" value="Update profile">
                                    <div class="form-control-feedback" id="id_error_submitbutton"
                                         style="display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="fdescription required">There are required fields in this form marked
                                <i class="icon question circle outline text-danger fa-fw " aria-hidden="true"
                                   title="Required field" aria-label="Required field"></i>.
                            </div>
                        </form>
                    </div>


                </div>
            </section>
        </div>
    </div>
</div>


@endsection
