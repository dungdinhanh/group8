@extends('layouts.app')

@section('title', '| Create Homework')

{{--require course name, lesson name in $course and $lesson--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('Create homework for '.$lesson->lesson_title.' of '.$course->course_name)}}
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('create_homework')}}">
                            @csrf
                            <div class="row form-group">
                                <label for="homework_no" class="col-md-4 col-form-label text-md-right">
                                    {{__('Homework No')}}
                                </label>

                                <div class="col-md-1">
                                    <input type="text" class="text-center" id="homework_no" name="homework_no" value="{{old('homework_no')}}" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="title" class="col-md-4 col-form-label text-md-right">
                                    {{__('Title')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="title" name="title" type="text" class="form-control {{
                                    $errors->has('title') ? 'is-invalid' : ''}}"  value="{{old('title')}}">

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="content" class="col-md-4 col-form-label text-md-right">
                                    {{__('Content')}}
                                </label>

                                <div class="col-md-6">
                                        <textarea id="content" name="content" cols="50" rows="20"
                                                  class="col-md-12 form-control {{$errors->has('content') ? 'is-invalid':''}}">
                                            {{old('content')}}
                                        </textarea>

                                    @if($errors->has('content'))
                                        <span class="invalid-feedback">
                                            <strong>{{$errors->first('content')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="start" class="col-md-4 col-form-label text-md-right">
                                    {{__('Start Date:')}}
                                </label>

                                <div class="col-md-6">
                                    <input type="datetime-local" id="start" name="start"
                                           class="text-center form-control col-md-8">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="dead_line"
                                       class="col-md-4 col-form-label text-md-right">
                                    {{__('Dead Line')}}
                                </label>

                                <div class="col-md-6">
                                    <input id="dead_line" type="datetime-local"
                                           name="dead_line" class="form-control col-md-8">
                                </div>
                            </div>

                            <input type="hidden" name="lesson_id" value="{{__($lesson->id)}}">
                            <input type="hidden" name="course_id" value="{{__($course->id)}}">
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('Create Homework')}}
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