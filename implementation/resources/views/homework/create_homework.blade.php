@extends('layouts.app')

@section('title', '| Create Homework')

{{--require course name, lesson name in $course and $lesson--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('Create homework for '.$lesson.' of '.$course)}}
                    </div>
                    <div class="card-body">
                        <form method="post" action="#">
                            @csrf
                            <div class="row form-group">
                                <label for="homework_no" class="col-md-4 col-form-label text-md-right">
                                    {{__('Homework No')}}
                                </label>

                                <div class="col-md-6">
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

                                <div class="row form-group">
                                    <label for="content" class="col-md-4 col-form-label text-md-right">
                                        {{__('Content')}}
                                    </label>

                                    <div class="col-md-6">
                                        <textarea class="text-center col-md-4 form-control {{$errors->has('content') ? 'is-invalid':''}}">
                                            {{old('content')}}
                                        </textarea>

                                        @if($errors->has('content'))
                                        <span class="invalid-feedback">
                                            <strong>{{$errors->first('content')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection