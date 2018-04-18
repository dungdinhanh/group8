@extends('layouts.app')

@section('title', '|Courses')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <button><a href="{{ route('create_course') }}"> Add new course</a></button>
                    <div class="card-header" >
                        {{__('Course you are holding')}}
                    </div>
                    <div class="card-body">
                        <input type="text" id="search" placeholder="search course">
                        <div id="search_result">
                        </div>
                        <div class="table" id="origin_result">
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

@section('js')
    <script src="{{ asset('js/code/course/search.js') }}"></script>
@endsection