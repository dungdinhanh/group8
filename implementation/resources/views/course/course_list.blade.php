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
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#search").keyup(function(){
                var search =  $("#search").val();
                if (search.length < 2) {
                    $("#origin_result").show();
                    $("#search_result").hide();
                } else {
                    $("#origin_result").hide();
                    $("#search_result").show();
                    $.ajax({
                        type:'POST',
                        url:'/teacher/course/search',
                        data:{search : search},
                        success:function(data){
                            $( "#search_result").html(data);
                        }
                    });
                }
            });
        });
    </script>
@endsection
