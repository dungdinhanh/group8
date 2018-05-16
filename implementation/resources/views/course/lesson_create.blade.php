@extends('layouts.app')

@section('title', '| Create lesson')

{{--require course name, lesson name in $course and $lesson--}}

@section('content')
    <div class="container" style="margin-top: 66px">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h2>{{__('Create lesson for of '.$course->course_name)}}</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('teacher.lesson.store')}}">
                            @csrf
                            <div class="row form-group">
                                <label for="title" class="col-md-4 col-form-label text-md-right">
                                    {{__('Title')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="title" name="title" type="text" class="form-control {{
                                    $errors->has('title') ? 'is-invalid' : ''}}" value="{{old('title')}}">

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="note" class="col-md-4 col-form-label text-md-right">
                                    {{__('note')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="note" name="note" type="text" class="form-control {{
                                    $errors->has('note') ? 'is-invalid' : ''}}" value="{{old('note')}}">

                                    @if ($errors->has('note'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('note') }}</strong>
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

                            <input type="hidden" name="course_id" value="{{__($course->id)}}">
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('Create lesson')}}
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

@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 500,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
@endsection