@extends('layouts.app')

@section('title', '| Submission')
{{-- Require input to have homework, submission + course name + student name--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{__('Homework content - '.$homework->title)}}
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-md-4">Field</th>
                                <th class="col-md-6">Content</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <th>{{__('Homework No:')}}</th>
                                <td class="justify-content-center">{{__($homework->homework_no)}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Homework Title:')}}</th>
                                <td>{{__($homework->title)}}</td>
                            </tr>


                            <tr>
                                <th>{{__('Content')}}</th>
                                <td class="col-md-8">{{__($homework->content)}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Dead line')}}</th>
                                <td>{{__($homework->dead_line)}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Course')}}</th>
                                <td>{{__($course_name)}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div    class="card">
                    <div class="card-header">
                        {{__('Submission - '.$submission->title)}}
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
                                <th>{{__('Submission ID')}}</th>
                                <td>{{$submission->id}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Student name')}}</th>
                                <td>{{$student_name}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Course Name')}}</th>
                                <td>{{$course_name}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Submission title')}}</th>
                                <td>{{$submission->title}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Content')}}</th>
                                <td>
                                    <p>{{$submission->content}}</p>
                                </td>
                            </tr>

                            <tr>
                                <th>{{__('Note for teacher')}}</th>
                                <td>
                                    <p>{{$submission->note}}</p>
                                </td>
                            </tr>

                            <tr>
                                <th>{{__('Over time')}}</th>
                                <td>{{$submission->overtime}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Submit At:')}}</th>
                                <td>{{(string)$submission->created_at}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Review Comment')}}</th>
                                <td>{{__('No review')}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection