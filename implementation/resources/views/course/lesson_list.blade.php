@extends('layouts.app');

@section('title', '|Course - Lesson')

@section('content')

<div id="page" class="container-fluid">
    <header id="page-header" class="row">
        <div class="col-xs-12 p-a-1">
            <div class="card">
                <div class="card-block">
                    <div class="pull-xs-right context-header-settings-menu"></div>
                    <div class="pull-xs-left">
                        <div class="page-context-header">
                            <div class="page-header-headings"><h1>{{__($course->course_name)}}</h1></div>
                        </div>
                    </div>
                    <div class="clearfix w-100 pull-xs-left" id="page-navbar">
                        <div class="breadcrumb-nav">
                            <nav role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                                href="">courses</a></li>
                                    <li class="breadcrumb-item"><a
                                                href="#"
                                                title="Digital Literacy ">{{__($course->course_name)}}</a></li>
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
                <div class="card card-block">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span>
                        <form action="." method="get">
                            <div><input type="hidden" id="completion_dynamic_change" name="completion_dynamic_change"
                                        value="0"></div>
                        </form>
                        <div class="course-content">
                            <div id="completionprogressid" class="completionprogress">Your progress<a
                                        class="btn btn-link p-a-0" role="button" data-container="body"
                                        data-toggle="popover"
                                        data-placement="right" data-content="<div class=&quot;no-overflow&quot;><p>A tick next to an activity name may be used to indicate when the activity is complete.</p>

<p>If a box with a dotted border is shown, a tick will appear automatically when you have completed the activity according to conditions set by the teacher.</p>

<p>If a box with a solid border is shown, you can click it to tick the box when you think you have completed the activity. (Clicking it again removes the tick if you change your mind.)</p>
</div> " data-html="true" tabindex="0" data-trigger="focus">
                                    <i class="icon fa fa-question-circle text-info fa-fw " aria-hidden="true"
                                       title="Help with Completion tick boxes"
                                       aria-label="Help with Completion tick boxes"></i>
                                </a></div>
                            <h2 class="accesshide">Topic outline</h2>
                            <ul class="topics">
                                <li id="section-0" class="section main clearfix" role="region"
                                    aria-label="About this course"><span
                                            class="hidden sectionname">About this course</span>
                                    <div class="left side"></div>
                                    <div class="right side"><img class="icon spacer" width="1" height="1" alt=""
                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/core/1524376896/spacer">
                                    </div>
                                    <div class="content"><h3 class="sectionname"><span><a
                                                        href="https://school.demo.moodle.net/course/view.php?id=66#section-0">About this course</a></span>
                                        </h3>
                                        <div class="section_availability"></div>
                                        <div class="summary">
                                            <div class="no-overflow"><p>This course explores Digital Literacy and its
                                                    importance for teachers and students. The course is optimised for
                                                    the
                                                    mobile app. Please try it out!</p></div>
                                        </div>
                                        <ul class="section img-text">
                                            <li class="activity choice modtype_choice " id="module-777">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href=""><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/choice/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">{{__('Course ID: ')}}<span
                                                                                class=""> {{__($course->id)}}</span></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity survey modtype_survey " id="module-778">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href=""><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/survey/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">{{__('Max Students : ')}}: {{__($course->max_students)}}</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity survey modtype_survey " id="module-778">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href=""><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/survey/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">{{__('Max groups: ')}}: {{__($course->max_groups)}}</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity data modtype_data " id="module-802">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href=""><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/data/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">{{__('Start date: ')}}</span><span
                                                                            class=""> {{__($course->start_date)}}</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity data modtype_data " id="module-802">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href=""><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/data/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">{{__('End date: ')}}</span><span
                                                                            class="">  {{__($course->end_date)}}</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @foreach($lessons as $lesson)
                                <li id="section-2" class="section main clearfix" role="region"
                                    aria-label="Group work and assessment"><span class="hidden sectionname">Group work and assessment</span>
                                    <div class="left side"></div>
                                    <div class="right side"><img class="icon spacer" width="1" height="1" alt=""
                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/core/1524376896/spacer">
                                    </div>
                                    <div class="content"><h3 class="sectionname"><span><a
                                                        href="{{route('show_create_homework', [
                        'course_id' => $course->id,
                        'lesson_id' => $lesson->id
                        ])}}">{{__($lesson->lesson_title)}}</a></span>
                                        </h3>
                                        <div class="section_availability"></div>
                                        <div class="summary"></div>
                                        <ul class="section img-text">
                                            <li class="activity scorm modtype_scorm " id="module-790">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href="https://school.demo.moodle.net/mod/scorm/view.php?id=790"><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/scorm/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">Forum netiquette<span
                                                                                class="accesshide "> SCORM package</span></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity quiz modtype_quiz " id="module-789">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href="https://school.demo.moodle.net/mod/quiz/view.php?id=789"><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/quiz/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">Fun quiz: How's your Social media?</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity wiki modtype_wiki " id="module-786">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href="https://school.demo.moodle.net/mod/wiki/view.php?id=786"><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/wiki/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">Share examples of digital literacy<span
                                                                                class="accesshide "> Wiki</span></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity assign modtype_assign " id="module-787">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787"><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/assign/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">Assignment 1 (Text)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity assign modtype_assign " id="module-788">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=788"><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/assign/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">Assignment 2 (Upload)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity workshop modtype_workshop " id="module-803">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance"><a class="" onclick=""
                                                                                             href="https://school.demo.moodle.net/mod/workshop/view.php?id=803"><img
                                                                            src="https://school.demo.moodle.net/theme/image.php/boost/workshop/1524376896/icon"
                                                                            class="iconlarge activityicon" alt=" "
                                                                            role="presentation"><span
                                                                            class="instancename">Workshop: Transmediation </span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>


                </div>
            </section>
        </div>
    </div>
</div>
@endsection