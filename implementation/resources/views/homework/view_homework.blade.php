@extends('layouts.app')

@section('title',  '| Homework')

@section('content')
<link href="<?php echo e(asset('css/profile.css')); ?>" rel="stylesheet">

<div class="container" style="margin-top: 66px">
    <div class="row">
        <div style="margin-top: 20px"
             class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center">
                    <h3 class="panel-title">
                        {{__('Homework No.'.$homework->homework_no.' - '.$homework->title)}}
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img style="width: 100px; border-radius: 50%"
                                 alt="User Pic"
                                 src="{{ asset('images/hw.jpg') }}"
                                 class="img-circle img-responsive">
                        </div>
                        <div class="col-md-9 col-lg-9">
                            <table class="table table-user-information">
                                <tbody>
                                <div class="table">
                                    <tr>
                                        <td>
                                            {{__('Title')}}                                        </td>
                                        <td>
                                            <label id="user_name">{{__($homework->title)}}</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{__('Content')}}
                                        </td>

                                        <td>
                                            <label id="email">{{__($homework->content)}}</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            {{__('Start date')}}
                                        </td>

                                        <td>
                                            {{__($homework->start)}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            {{__('Deadline')}}
                                        </td>

                                        <td>
                                            {{__($homework->dead_line)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{__('Lesson')}}
                                        </td>

                                        <td>
                                            {{__($lesson)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{__('Course')}}
                                        </td>

                                        <td>
                                            {{__($course)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($overtime)
                                            Over Time
                                            @else
                                            Time Left
                                            @endif
                                        </td>

                                        <td>
                                            {{__($time_left." hours")}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{__('Updated At')}}
                                        </td>

                                        <td>
                                            {{__((string)($homework->updated_at))}}
                                        </td>
                                    </tr>
                                </div>

                                </tbody>
                            </table>
                            @if(Auth::user()->role_id == 1)
                            <a href="{{route('submission_form', ['homework_id' => $homework->id])}}" type="submit" class="btn btn-primary">{{__('Do submisstion')}}</a>
                            @elseif(Auth::user()->role_id == 2)
                            <a href="#" type="submit" class="btn btn-primary">{{__('Edit')}} homework </a>
                            @endif
                            <a style="margin-top: 2px;" href="/home" class="btn btn-primary">Back To Home Page</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div

@endsection