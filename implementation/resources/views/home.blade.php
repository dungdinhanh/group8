@extends('layouts.app')
@section('title', '| Home - Moodle')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @guest
                        You are not logged in! Please log in to perform action
                        @else
                        You are logged in
                        @if(Auth::user()->role_id == 2)
                            <a class="nav-link"  href="{{
                            route('list_course_teacher',
                            ['user_id' => Auth::user()->id])}}">
                                Create Homework
                            </a>
                            @endif
                        @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
