@extends('layouts.app')

@section('title', '|Course - Lesson')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{__('Course Information')}}
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <div class="row">
                                <label for="course_id" class="col-md-5 text-md-left">
                                    {{__('Course ID: ')}}
                                </label>

                                <label id="course_id" class="col-md-7 text-center">
                                    {{__($course->id)}}
                                </label>

                            </div>

                            <div class="row">
                                <label for="course_name" class="col-md-5 text-md-left">
                                    {{__("Course Name: ")}}
                                </label>
                                <label id="course_name" class="col-md-7 text-center">
                                    {{__($course->course_name)}}
                                </label>
                            </div>

                            <div class="row">
                                <label for="max_students" class="col-md-5 text-md-left">
                                    {{__('Max Students : ')}}
                                </label>
                                <label id="max_students" class="col-md-7 text-center">
                                    {{__($course->max_students)}}
                                </label>
                            </div>

                            <div class="row">
                                <label for="max_groups" class="col-md-5 text-md-left">
                                    {{__('Max groups: ')}}
                                </label>
                                <label id="max_students" class="col-md-7 text-center">
                                    {{__($course->max_groups)}}
                                </label>
                            </div>

                            <div class="row">
                                <label for="start_date" class="col-md-5 text-md-left">
                                    {{__('Start date: ')}}
                                </label>
                                <label id="start_date" class="col-md-7 text-center">
                                    {{__($course->start_date)}}
                                </label>
                            </div>

                            <div class="row">
                                <label for="end_date" class="col-md-5 text-md-left">
                                    {{__('End date: ')}}
                                </label>

                                <label id="end_date" class="col-md-7 text-center">
                                    {{__($course->end_date)}}
                                </label>
                            </div>

                            <div class="row">
                                <label for="created_at" class="col-md-4 text-md-left">
                                    {{__('Created At:')}}
                                </label>

                                <label id="created_at" class="col-md-7 text-center">
                                    {{__((string)$course->created_at)}}
                                </label>
                            </div>

                            <div class="row">
                                <label for="updated_at" class="col-md-4 text-md-left">
                                    {{__('Updated At:')}}
                                </label>
                                <label id="updated_at" class="col-md-7 text-center">
                                    {{__((string)$course->updated_at)}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-header">
                    {{__('Lessons of '.$course->course_name. ' course')}}
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach($lessons as $lesson)
                            <div class="list-group-item">
                                <a href="{{route('show_create_homework', [
                                'course_id' => $course->id,
                                'lesson_id' => $lesson->id
                                ])}}">
                                    {{__($lesson->lesson_title)}}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection