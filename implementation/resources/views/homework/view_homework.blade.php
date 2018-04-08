@extends('layouts.app')

@section('title',  '| Homework')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('Homework No.'.$homework->homework_no.' - '.$homework->title)}}
                    </div>

                    <div class="card-body">
                        <div class="table">
                            <div class="row">
                                <label class="col-form-label col-md-4">
                                    {{__('Title')}}
                                </label>
                                <label class="col-form-label col-md-8">
                                    {{__($homework->title)}}
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-md-4">
                                    {{__('Content')}}
                                </label>

                                <p class="col-md-6">
                                    {{__($homework->content)}}
                                </p>
                            </div>


                            <div class="row">
                                <label class="col-form-label col-md-4">
                                    {{__('Start date')}}
                                </label>
                                <label class="col-md-6">
                                    {{__((string)($homework->start))}}
                                </label>
                            </div>


                            <div class="row">
                                <label class="col-form-label col-md-4">
                                    {{__('Deadline')}}
                                </label>
                                <label class="col-md-6">
                                    {{__((string)($homework->dead_line))}}
                                </label>
                            </div>


                            <div class="row">
                                <label class="col-form-label col-md-4">
                                    {{__('Lesson')}}
                                </label>

                                <label class="col-md-6">
                                    {{__($lesson)}}
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-md-4">
                                    {{__('Course')}}
                                </label>

                                <label class="col-md-6">
                                    {{__($course)}}
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-md-4">
                                    {{__('Time left')}}
                                </label>
                                <label class="col-md-6">
                                    {{$time_left}}
                                </label>
                            </div>

                            <div class="row mb-0 form-group">
                                <div class="col-md-6 offset-md-4">
                                    @if(Auth::user()->role_id == 2)
                                        <button href="#" type="submit" class="btn btn-primary">
                                            {{__('Edit')}}
                                        </button>
                                    @elseif(Auth::user()->role_id == 1)
                                        <button href="#" type="submit" class="btn-primary btn">
                                            {{__('Do submisstion')}}
                                        </button>

                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection