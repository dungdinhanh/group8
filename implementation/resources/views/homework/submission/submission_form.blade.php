@extends('layouts.app')

@section('title', '| Submission Form')

{{--Required input to have homework, student and course--}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        {{__('Homework content - '.$homework->title)}}
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-md-4">Field</th>
                                <th class="col-md-8">Content</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>{{__('Homework No:')}}</th>
                                <td>{{__($homework->homework_no)}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Homework Title')}}</th>
                                <td>{{__($homework->title)}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Content')}}</th>
                                <div class="row">
                                    <td class="col-md-8">{{__($homework->content)}}</td>
                                </div>

                            </tr>
                            <tr>
                                <th>{{__('Dead line')}}</th>
                                <td>{{__($homework->dead_line)}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Course')}}</th>
                                <td>{{__($course->course_name)}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        {{__('Submission Form ')}}
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{route('submit_homework')}}">
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
                                    <textarea id="note" name="note" cols="50" rows="5" class="col-form-label form-control col-md-12">Note for your submission</textarea>
                                </div>
                            </div>

                            <input type="hidden" value="{{__($student->id)}}" name="student_id">
                            <input type="hidden" value="{{__($course->id)}}" name="course_id">
                            <input type="hidden" value="{{__($homework->id)}}" name="homework_id">
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