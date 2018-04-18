@extends('layouts.app')

@section('title', '| Review')
{{--Require input as submission, student name, homework, teacher_id--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            {{__('Submission of '.$student_name)}}
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-4">{{__('Field')}}</th>
                                    <th class="col-md-8">{{__('Content')}}</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <th>{{__('Submission Title')}}</th>
                                    <td>{{$submission->title}}</td>
                                </tr>

                                <tr>
                                    <th>{{__('Submission Content')}}</th>
                                    <td>{{$submission->content}}</td>
                                </tr>

                                <tr>
                                    <th>{{__('Note From Student')}}</th>
                                    <td>{{$submission->note}}</td>
                                </tr>

                                <tr>
                                    <th>{{__('Over Time')}}</th>
                                    <td>{{__("".$submission->overtime." hours")}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            {{__('Homework '.$homework->homework_no)}}
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Content</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <th>{{__('Title')}}</th>
                                    <td>{{__($homework->title)}}</td>
                                </tr>

                                <tr>
                                    <th>{{__('Content')}}</th>
                                    <td>{{__($homework->content)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__("Review Form")}}
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{route('add_review', ['submission_id'=>$submission->id])}}">
                            @csrf
                            <div class="row form-group">
                                <label for="general_comment" class="col-form-label col-md-4">
                                    {{__('General Comment')}}
                                </label>
                                <div class="col-md-8">
                                    <input id="general_comment" name="general_comment" class="form-control col-md-12"
                                           type="text" value="General Comment">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="mark" class="col-form-label col-md-4">
                                    {{__('Score')}}
                                </label>
                                <div class="col-md-8">
                                    <input id="mark" name="mark" class="col-form-label col-md-2" type="number" step="0.1" value="10.0">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="comment" class="col-form-label col-md-4">
                                    {{__('Detail Comment')}}
                                </label>
                                <div class="col-md-8">
                        <textarea id="comment" name="comment" cols="50" rows="30" class="form-control col-md-12">
                            Detail Comment is here
                        </textarea>
                                </div>
                            </div>

                            <input type="hidden" name="teacher_id" value="{{$teacher_id}}">
                            <input type="hidden" name="submission_id" value="{{$submission->id}}">

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('Submit')}}
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