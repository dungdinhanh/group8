@extends('layouts.app')

@section('title', '|Courses')

@section('content')

<div id="page" class="container-fluid">
    <header id="page-header" class="row">
        <div class="col-xs-12 p-a-1">
            <div class="card">
                <div class="card-block">
                    <div class="pull-xs-right context-header-settings-menu"></div>
                    <div class="pull-xs-left">
                        <div class="page-context-header">
                            <div class="page-header-headings"><h1>Mount Orange School</h1></div>
                        </div>
                    </div>
                    <div class="clearfix w-100 pull-xs-left" id="page-navbar">
                        <div class="breadcrumb-nav">
                            <nav role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                                href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a
                                                href="">Courses</a></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="breadcrumb-button pull-xs-right"></div>
                    </div>
                    <div id="course-header"></div>
                </div>
            </div>
        </div>
    </header>

    <div id="page-content" class="row">
        <div id="region-main-box" class="col-xs-12">
            <section id="region-main">
                <div class="card card-block" id="yui_3_17_2_1_1524388453553_48">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main" id="yui_3_17_2_1_1524388453553_47"><span id="maincontent"></span><span></span>
                        <form action="" id="coursesearch" method="get"
                              class="form-inline">
                            <fieldset class="coursesearchbox invisiblefieldset">
                                <label for="coursesearchbox">Search courses</label>
                                <input id="search" name="search" type="text" size="30" value=""
                                       class="form-control">
                            </fieldset>
                        </form>
                        <div class="course_category_tree clearfix category-browse category-browse-0"
                             id="yui_3_17_2_1_1524388453553_46">
                            <div class="collapsible-actions"><a class="collapseexpand collapse-all" href="#">Collapse
                                    all</a></div>
                            <div class="content" id="yui_3_17_2_1_1524388453553_45">
                                <div class="subcategories" id="yui_3_17_2_1_1524388453553_44">
                                    <div class="category with_children loaded" data-categoryid="2" data-depth="1"
                                         data-showcourses="15" data-type="0" id="yui_3_17_2_1_1524388453553_43"
                                         aria-expanded="true">
                                        <div class="info" id="yui_3_17_2_1_1524388453553_42"><h3 class="categoryname"
                                                                                                 id="yui_3_17_2_1_1524388453553_41">
                                                <a href="">{{__('Course you are holding')}}</a><img
                                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1524384098/i/loading_small"
                                                        class="spinner iconsmall" style="display: none;"
                                                        hidden="hidden"></h3></div>
                                        <div class="content" style="">
                                            <div id="search_result" class="courses">
                                            </div>
                                            <div id="origin_result" class="courses">
                                                @csrf
                                                @foreach($courses as $course)
                                                <div class="coursebox clearfix odd first collapsed" data-courseid="66"
                                                     data-type="1">
                                                    <div class="info">
                                                        <div class="coursename"><a class=""
                                                                                   href="{{route('list_lessons', ['course_id'=>$course->id])}}">{{__($course->course_name)}}</a>
                                                        </div>
                                                        <div class="moreinfo"><a title="Summary"
                                                                                 href="{{route('list_lessons', ['course_id'=>$course->id])}}"><i
                                                                        class="icon sign in alternate"
                                                                        aria-hidden="true" title="Summary"
                                                                        aria-label="Summary"></i></a></div>
                                                        <div class="enrolmenticons"><i
                                                                    class="icon unlock"
                                                                    aria-hidden="true" title="Guest access"
                                                                    aria-label="Guest access"></i></div>
                                                    </div>
                                                    <div class="content"></div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Auth::user()->role_id == 2)
                        <div class="buttons">
                            <div class="singlebutton">
                                <form method="get" action="{{ route('create_course') }}">
                                    <button type="submit" class="btn btn-secondary" id="single_button5ae2034e8883c2"
                                            title="">[+] Add a new course
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>


                </div>
            </section>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/code/course/search.js') }}"></script>
@endsection