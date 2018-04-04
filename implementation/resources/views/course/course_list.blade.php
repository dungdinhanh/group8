@extends('layouts.app')

@section('title', '|Courses')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" >
                        {{__('Course you are holding')}}
                    </div>
                    <div class="card-body">
                        <div class="table">
                            @csrf
                            @foreach($courses as $course)
                                    <div class="row nav-link">
                                        <a class="nav-link" href="{{route('list_lessons', ['course_id'=>$course->id])}}">
                                            {{__($course->course_name)}}
                                        </a>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection