@extends('layouts.app')
@section('title', '| Home - Moodle')
@section('content')

@if (Auth::guest())
<style>
    #notLogin {
        width: 450px;
        position: relative;
        font-size: 2rem;
        animation-name: example;
        animation-duration: 3s;
        animation-fill-mode: forwards;
    }

    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes example {
        from {
            top: 10px;
        }
        to {
            top: 200px;
        }
    }

    @keyframes example {
        from {
            top: 10px;
        }
        to {
            top: 200px;
        }
    }
</style>
<div id="notLogin" class="container">
    <header style=" margin: 10px auto; text-align: center" id="page-header">
        You are not<a href="{{ route('login') }}"> login</a>! Please log in to perform action
    </header>
</div>
@else
<div id="page" class="container-fluid">
    <header id="page-header" class="row">
        <div class="col-xs-12 p-a-1" id="yui_3_17_2_1_1523828301733_42">
            <div class="card" id="yui_3_17_2_1_1523828301733_41">

            </div>
        </div>
    </header>

    <div id="page-content" class="row">
        <div id="region-main-box" class="col-xs-12">
            @if(Auth::user()->role_id == 2)
            <section id="region-main" class="has-blocks">
                @else
                <section id="region-main">
                    @endif
                    <div class="card card-block">
                        <span class="notifications" id="user-notifications"></span>
                        <div role="main">
                            <span id="maincontent"></span>
                            <aside id="block-region-content" class="block-region" data-blockregion="content"
                                   data-droptarget="1">
                                <a href="#sb-3" class="sr-only sr-only-focusable">Skip Try Moodle as a teacher</a>
                                <span id="sb-3"></span>
                                <a href="#sb-4" class="sr-only sr-only-focusable">Skip Course overview</a>

                                <aside id="inst248" class=" block block_myoverview  card m-b-1" role="complementary"
                                       data-block="myoverview" aria-labelledby="instance-248-header">

                                    <div class="card-block">

                                        <h3 id="instance-248-header" class="card-title">Course overview</h3>

                                        <div class="card-text content">
                                            <div id="block-myoverview-5ad3c64cd3d045ad3c64cc86722"
                                                 class="block-myoverview" data-region="myoverview">
                                                <ul id="block-myoverview-view-choices-5ad3c64cd3d045ad3c64cc86722"
                                                    class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#myoverview_timeline_view"
                                                           role="tab" data-toggle="tab" data-tabname="timeline">
                                                            Timeline
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" onclick="changeCourseOverview()">
                                                        <a class="nav-link " href="#myoverview_courses_view"
                                                           role="tab" data-toggle="tab" data-tabname="courses">
                                                            Courses
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content content-centred">
                                                    <div role="tabpanel" class="tab-pane fade in active"
                                                         id="myoverview_timeline_view">
                                                        <div id="timeline-view-5ad3c64cd3d045ad3c64cc86722"
                                                             data-region="timeline-view">
                                                            <div class="row text-xs-center">
                                                                <div class="btn-group m-t-2" role="group"
                                                                     data-toggle="btns">
                                                                    <a class="btn btn-default active"
                                                                       href="#myoverview_timeline_dates"
                                                                       data-toggle="tab">
                                                                        Sort by dates
                                                                    </a>

                                                                </div>
                                                            </div>

                                                            <div class="tab-content">
                                                                <div class="tab-pane active fade in"
                                                                     id="myoverview_timeline_dates">
                                                                    <div data-region="timeline-view-dates"
                                                                         id="timeline-view-dates-5ad3c64cd3d045ad3c64cc86722">
                                                                        <div data-region="event-list-container"
                                                                             data-limit="20" data-course-id=""
                                                                             data-last-id="446"
                                                                             data-midnight="1523746800"
                                                                             id="event-list-container-" class=""
                                                                             data-loaded-all="true"
                                                                             data-has-events="true">

                                                                            <div data-region="event-list-content">
                                                                                <div data-region="event-list-group-container"
                                                                                     data-start-day="-14"
                                                                                     data-end-day="0"
                                                                                     class="hidden">

                                                                                    <h5 class="h6 m-t-1 text-danger"
                                                                                        id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        <strong>Recently
                                                                                            overdue</strong>
                                                                                    </h5>
                                                                                    <ul class="list-group unstyled"
                                                                                        data-region="event-list"
                                                                                        aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                    </ul>
                                                                                </div>
                                                                                <div data-region="event-list-group-container"
                                                                                     data-start-day="0"
                                                                                     data-end-day="1"
                                                                                     class="hidden">

                                                                                    <h5 class="h6 m-t-1 "
                                                                                        id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        <strong>Today</strong></h5>
                                                                                    <ul class="list-group unstyled"
                                                                                        data-region="event-list"
                                                                                        aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                    </ul>
                                                                                </div>
                                                                                <div data-region="event-list-group-container"
                                                                                     data-start-day="1"
                                                                                     data-end-day="7"
                                                                                     class="hidden">

                                                                                    <h5 class="h6 m-t-1 "
                                                                                        id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        <strong>Next 7 days</strong>
                                                                                    </h5>
                                                                                    <ul class="list-group unstyled"
                                                                                        data-region="event-list"
                                                                                        aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                    </ul>
                                                                                </div>
                                                                                <div data-region="event-list-group-container"
                                                                                     data-start-day="7"
                                                                                     data-end-day="30"
                                                                                     class="hidden">

                                                                                    <h5 class="h6 m-t-1 "
                                                                                        id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        <strong>Next 30
                                                                                            days</strong></h5>
                                                                                    <ul class="list-group unstyled"
                                                                                        data-region="event-list"
                                                                                        aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                    </ul>
                                                                                </div>
                                                                                <div data-region="event-list-group-container"
                                                                                     data-start-day="30"
                                                                                     data-end-day="" class="">

                                                                                    <h5 class="h6 m-t-1 "
                                                                                        id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        <strong>Future</strong></h5>
                                                                                    <ul class="list-group unstyled"
                                                                                        data-region="event-list"
                                                                                        aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722"
                                                                                        id="yui_3_17_2_1_1523828301733_39">
                                                                                        <li class="list-group-item event-list-item"
                                                                                            data-region="event-list-item">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                    <div class="d-inline-block icon-large event-icon">
                                                                                                        <img class="icon "
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/lesson/1523822493/icon"
                                                                                                             alt="Activity event"
                                                                                                             title="Activity event">

                                                                                                    </div>
                                                                                                    <div class="d-inline-block event-name-container">
                                                                                                        <a class="event-name text-truncate"
                                                                                                           href="">FOBO?
                                                                                                            Let us
                                                                                                            help you
                                                                                                            cure it!
                                                                                                            closes</a>
                                                                                                        <p class="small text-muted text-truncate m-b-0">
                                                                                                            Digital
                                                                                                            Literacy </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                            26 May,
                                                                                                            12:10
                                                                                                        </div>
                                                                                                        <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                            <a href="">Start
                                                                                                                lesson</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>


                                                                                        <li class="list-group-item event-list-item"
                                                                                            data-region="event-list-item">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                    <div class="d-inline-block icon-large event-icon">
                                                                                                        <img class="icon "
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/lesson/1523822493/icon"
                                                                                                             alt="Activity event"
                                                                                                             title="Activity event">

                                                                                                    </div>
                                                                                                    <div class="d-inline-block event-name-container">
                                                                                                        <a class="event-name text-truncate"
                                                                                                           href="">Can
                                                                                                            you make
                                                                                                            a
                                                                                                            revolution?
                                                                                                            closes</a>
                                                                                                        <p class="small text-muted text-truncate m-b-0">
                                                                                                            History:
                                                                                                            Russia
                                                                                                            in
                                                                                                            Revolution</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                            16 Aug,
                                                                                                            09:20
                                                                                                        </div>
                                                                                                        <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                            <a href="">Start
                                                                                                                lesson</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>


                                                                                        <li class="list-group-item event-list-item"
                                                                                            data-region="event-list-item">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                    <div class="d-inline-block icon-large event-icon">

                                                                                                        <img class="icon "
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/assign/1523822493/icon"
                                                                                                             alt="Activity event"
                                                                                                             title="Activity event">

                                                                                                    </div>
                                                                                                    <div class="d-inline-block event-name-container">
                                                                                                        <a class="event-name text-truncate"
                                                                                                           href="">Assignment
                                                                                                            2
                                                                                                            (Upload)
                                                                                                            is due
                                                                                                            to be
                                                                                                            graded</a>
                                                                                                        <p class="small text-muted text-truncate m-b-0">
                                                                                                            Digital
                                                                                                            Literacy </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                            5 Sep,
                                                                                                            01:00
                                                                                                        </div>
                                                                                                        <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                            <a href="">Grade</a>
                                                                                                            <span class="tag tag-pill tag-default">1</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>


                                                                                        <li class="list-group-item event-list-item"
                                                                                            data-region="event-list-item">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                    <div class="d-inline-block icon-large event-icon">


                                                                                                        <img class="icon "
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/workshop/1523822493/icon"
                                                                                                             alt="Activity event"
                                                                                                             title="Activity event">

                                                                                                    </div>
                                                                                                    <div class="d-inline-block event-name-container">
                                                                                                        <a class="event-name text-truncate"
                                                                                                           href="">Workshop:
                                                                                                            Transmediation
                                                                                                            deadline
                                                                                                            for
                                                                                                            submissions</a>
                                                                                                        <p class="small text-muted text-truncate m-b-0">
                                                                                                            Digital
                                                                                                            Literacy </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                            21 Nov,
                                                                                                            10:00
                                                                                                        </div>
                                                                                                        <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                            <a href="">View
                                                                                                                workshop
                                                                                                                summary</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>


                                                                                        <li class="list-group-item event-list-item"
                                                                                            data-region="event-list-item">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                    <div class="d-inline-block icon-large event-icon">


                                                                                                        <img class="icon "
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/data/1523822493/icon"
                                                                                                             alt="Activity event"
                                                                                                             title="Activity event">

                                                                                                    </div>
                                                                                                    <div class="d-inline-block event-name-container">
                                                                                                        <a class="event-name text-truncate"
                                                                                                           href="">Database:
                                                                                                            Food for
                                                                                                            Moodlers
                                                                                                            closes</a>
                                                                                                        <p class="small text-muted text-truncate m-b-0">
                                                                                                            Celebrating
                                                                                                            Cultures</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                            16 Feb,
                                                                                                            11:05
                                                                                                        </div>
                                                                                                        <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                            <a href="">Add
                                                                                                                entry</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>


                                                                                        <li class="list-group-item event-list-item"
                                                                                            data-region="event-list-item">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                    <div class="d-inline-block icon-large event-icon">


                                                                                                        <img class="icon "
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/assign/1523822493/icon"
                                                                                                             alt="Activity event"
                                                                                                             title="Activity event">

                                                                                                    </div>
                                                                                                    <div class="d-inline-block event-name-container">
                                                                                                        <a class="event-name text-truncate"
                                                                                                           href="">
                                                                                                            (Mobile
                                                                                                            assignment)
                                                                                                            View
                                                                                                            from
                                                                                                            your
                                                                                                            window
                                                                                                            is due
                                                                                                            to be
                                                                                                            graded
                                                                                                        </a>
                                                                                                        <p class="small text-muted text-truncate m-b-0">
                                                                                                            Celebrating
                                                                                                            Cultures
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                            2 Mar,
                                                                                                            00:00
                                                                                                        </div>
                                                                                                        <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                            <a href="">Grade</a>
                                                                                                            <span class="tag tag-pill tag-default">3</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="text-xs-center text-center m-y-2">
                                                                                    <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-action="view-more"
                                                                                            disabled="">
                                                                                        View more
                                                                                        <span class="hidden"
                                                                                              data-region="loading-icon-container">
                                                                                            <span class="loading-icon">
                                                                                                <img class="icon "
                                                                                                     alt="Loading"
                                                                                                     title="Loading"
                                                                                                     src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading">
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="hidden text-xs-center text-center m-t-3"
                                                                                 data-region="empty-message">
                                                                                <img class="empty-placeholder-image-lg"
                                                                                     src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                     alt="No upcoming activities due"
                                                                                     role="presentation">
                                                                                <p class="text-muted m-t-1">No
                                                                                    upcoming activities due</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade"
                                                         id="myoverview_courses_view">

                                                        <div id="courses-view-5ad3c64cd3d045ad3c64cc86722"
                                                             data-region="courses-view">
                                                            <div class="text-xs-center text-center">
                                                                <div class="btn-group m-y-2" role="group"
                                                                     data-toggle="btns">
                                                                    <a class="btn btn-default active"
                                                                       href="#myoverview_courses_view_in_progress"
                                                                       data-toggle="tab">
                                                                        In progress
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active fade in"
                                                                     id="myoverview_courses_view_in_progress">
                                                                    <div id="courses-view-in-progress"
                                                                         data-status="1">
                                                                        <div class="table">

                                                                            <div class="row nav-link">

                                                                            </div>
                                                                        </div>
                                                                        <div id="pc-for-in-progress"
                                                                             data-region="paging-content">
                                                                            <div data-region="paging-content-item"
                                                                                 data-page="1" id="page1" class="row">
                                                                                @csrf
                                                                                @foreach($courses as $course)
                                                                                <div class="col-lg-6">
                                                                                    <div class="card m-b-1 courses-view-course-item">
                                                                                        <div class="card-block course-info-container"
                                                                                             id="course-info-container-66">
                                                                                            <div class="hidden-xs-down visible-phone">
                                                                                                <div class="media">
                                                                                                    <div class="media-left">
                                                                                                        <div class="media-object">
                                                                                                            <div class="progress-chart-container m-b-1">
                                                                                                                <div class="progress-doughnut">
                                                                                                                    <div class="progress-text has-percent">
                                                                                                                        {{__($course->max_students)}}%
                                                                                                                    </div>
                                                                                                                    <div class="progress-indicator">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                            <g>
                                                                                                                                <title aria-hidden="true">
                                                                                                                                    {{__($course->max_students)}}%
                                                                                                                                </title>
                                                                                                                                <circle class="circle percent-{{__($course->max_students)}}"
                                                                                                                                        r="27.5"
                                                                                                                                        cx="35"
                                                                                                                                        cy="35">
                                                                                                                                </circle>
                                                                                                                            </g>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="media-body">
                                                                                                        <h4 class="h5">
                                                                                                            @if(Auth::user()->isTeacher())
                                                                                                                <a href="{{route('teacher.lesson.list', ['course_id' => $course->id])}}"
                                                                                                                   class="">{{__($course->course_name)}}
                                                                                                                </a>
                                                                                                            @else
                                                                                                                <a href="{{route('student.lesson.list', ['course_id' => $course->id])}}"
                                                                                                                   class="">{{__($course->course_name)}}
                                                                                                                </a>
                                                                                                            @endif
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p class="text-muted">
                                                                                                Introducing the
                                                                                                concept of
                                                                                                {{__($course->course_name)}}.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer"></div>
                                        </div>
                                    </div>
                                </aside>
                                <span id="sb-4"></span></aside>
                        </div>
                    </div>
                </section>
                @if(Auth::user()->role_id == 2)
                <section data-region="blocks-column" class="hidden-print">
                    <aside id="block-region-side-pre" class="block-region" data-blockregion="side-pre"
                           data-droptarget="1"><a href="#sb-1" class="sr-only sr-only-focusable">Skip Online
                            users</a>

                        <aside id="inst247" class=" block block_online_users  card m-b-1" role="complementary"
                               data-block="online_users" aria-labelledby="instance-247-header">

                            <div class="card-block">


                                <h3 id="instance-247-header" class="card-title">Online users</h3>

                                <div class="card-text content">
                                    <div class="info">(last 5 minutes: 1)</div>
                                    <ul class="list">
                                        <li class="listentry">
                                            <div class="user"><a href="" title="now">
                                                    <img src="https://school.demo.moodle.net/pluginfile.php/160/user/icon/boost/f2?rev=1"
                                                         alt="" title="" class="userpicture" width="16"
                                                         height="16">{{ Auth::user()->full_name }}
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearer"><!-- --></div>
                                    <div class="footer"></div>

                                </div>

                            </div>

                        </aside>

                        <span id="sb-1"></span>
                        <a href="#sb-2" class="sr-only sr-only-focusable">Skip Latest announcements</a>

                        <aside id="inst278" class=" block block_news_items  card m-b-1" role="complementary"
                               data-block="news_items" aria-labelledby="instance-278-header">

                            <div class="card-block">


                                <h3 id="instance-278-header" class="card-title">Latest announcements</h3>

                                <div class="card-text content">

                                    <ul class="unlist">
                                        <li class="post">
                                            <div class="head clearfix">
                                                <div class="date">8 Jan, 12:57</div>
                                                <div class="name">Anna Alexander</div>
                                            </div>
                                            <div class="info">
                                                <a href="#">Try the new features of Moodle 3.4 on Mount Orange!</a>
                                            </div>
                                        </li>
                                        <li class="post">
                                            <div class="head clearfix">
                                                <div class="date">29 May, 11:34</div>
                                                <div class="name">Anna Alexander</div>
                                            </div>
                                            <div class="info"><a
                                                        href="#">Mount
                                                    Orange is using Moodle 3.3!</a></div>
                                        </li>
                                        <li class="post">
                                            <div class="head clearfix">
                                                <div class="date">17 Feb, 09:44</div>
                                                <div class="name">Anna Alexander</div>
                                            </div>
                                            <div class="info">
                                                <a href="#">Mount Orange is running Moodle 3.2!</a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="footer">
                                        <a href="#">Older topics</a> ...
                                    </div>

                                </div>

                            </div>

                        </aside>

                        <span id="sb-2"></span>
                    </aside>
                </section>
                @endif
        </div>
    </div>
</div>
@endif

@endsection
