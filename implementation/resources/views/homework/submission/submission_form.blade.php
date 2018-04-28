@extends('layouts.app')

@section('title', '| Submission Form')

{{--Required input to have homework, student and course--}}

@section('content')
<div id="page" class="container-fluid">
    <header id="page-header" class="row">
        <div class="col-xs-12 p-a-1">
            <div class="card">
                <div class="card-block">
                    <div class="pull-xs-right context-header-settings-menu"></div>
                    <div class="pull-xs-left">
                        <div class="page-context-header">
                            <div class="page-header-headings"><h1>{{__($course->course_name)}}</h1></div>
                        </div>
                    </div>
                    <div class="clearfix w-100 pull-xs-left" id="page-navbar">
                        <div class="breadcrumb-nav">
                            <nav role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                                href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item">My courses</li>
                                    <li class="breadcrumb-item"><a
                                                href=""
                                                title="Digital Literacy ">{{__($course->course_name)}}</a></li>
                                    <li class="breadcrumb-item"><a
                                                href="#"
                                                title="Assignment">Assignment {{__($homework->homework_no)}}</a></li>
                                    <li class="breadcrumb-item">Edit submission</li>
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
                <div class="card card-block" id="yui_3_17_2_1_1524908524725_372">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main" id="yui_3_17_2_1_1524908524725_371"><span id="maincontent"></span>
                        <h2>Assignment {{__($homework->homework_no)}} (Text) </h2>
                        <h6>Deadline: {{__($homework->dead_line)}}</h6>
                        <div id="intro" class="box generalbox boxaligncenter p-y-1">
                            <div class="no-overflow">
                                <p>{{__($homework->title)}}</p>
                                <p>{{__($homework->content)}}</p>
                            </div>
                        </div>
                        <div class="box boxaligncenter editsubmissionform p-y-1" id="yui_3_17_2_1_1524908524725_370">
                            <form autocomplete="off" method="post" accept-charset="utf-8" id="mform1" class="mform"
                                  action="{{route('submit_homework')}}">
                                <div class="row form-group">
                                    <label for="title" class="col-form-label col-md-4">
                                        {{__('Title')}}
                                    </label>
                                    <div class="col-md-8">
                                        <input id="title" name="title" class="form-control
col-md-12" type="text" value="Title">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="content" class="col-form-label col-md-4">
                                        {{__('Content')}}
                                    </label>
                                    <div class="col-md-8">
                            <textarea id="content" name="content" cols="50" rows="20" class="col-form-label form-control
col-md-12">Type your answer here</textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="note" class="col-form-label col-md-4">
                                        {{__('Note')}}
                                    </label>

                                    <div class="col-md-8">
                                        <textarea id="note" name="note" cols="50" rows="5"
                                                  class="col-form-label form-control col-md-12">Note for your submission</textarea>
                                    </div>
                                </div>

                                <input type="hidden" value="{{__($student->id)}}" name="student_id">
                                <input type="hidden" value="{{__($course->id)}}" name="course_id">
                                <input type="hidden" value="{{__($homework->id)}}" name="homework_id">
                                <div class="form-group row  fitem femptylabel  " data-groupname="buttonar">

                                    <div class="col-md-9 form-inline felement" data-fieldtype="group">

                                        <div class="form-group  fitem  ">
                                            <label class="col-form-label " for="id_submitbutton">


                                            </label>
                                            <span data-fieldtype="submit">
                                <input type="submit" class="btn btn-primary" name="submitbutton" id="id_submitbutton"
                                       value="Save changes">
                                            </span>
                                        </div>

                                        <div class="form-group  fitem   btn-cancel">
                                            <label class="col-form-label " for="id_cancel">


                                            </label>
                                            <span data-fieldtype="submit">
                                            <input type="submit" class="btn

                                        btn-secondary
                                        " name="cancel" id="id_cancel" value="Cancel"
                                                   onclick="skipClientValidation = true; return true;">
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>


@endsection