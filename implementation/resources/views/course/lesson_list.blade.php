@extends('layouts.app');

@section('title', '|Course - Lesson')

@section('content')
<style>
    a, ol, li {
        text-decoration: none !important;
    }
</style>

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
                                    <li class="breadcrumb-item">
                                        <a href="/home">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('teacher.course.list', ['user_id'=>Auth::user()->id])}}">courses</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" title="Digital Literacy ">{{__($course->course_name)}}</a>
                                    </li>
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
                    <div role="main">
                        <span id="maincontent"></span>
                        <form action="." method="get">
                            <div>
                                <input type="hidden" id="completion_dynamic_change" name="completion_dynamic_change"
                                       value="0">
                            </div>
                        </form>
                        <div class="course-content">
                            <div id="completionprogressid" class="completionprogress">Your progress
                                <a class="btn btn-link p-a-0" role="button" data-container="body"
                                   data-toggle="popover"
                                   data-placement="right" data-content="<div class=&quot;no-overflow&quot;><p>A tick next to an activity name may be used to indicate when the activity is complete.</p>
                                    <p>If a box with a dotted border is shown, a tick will appear automatically when you have completed the activity according to conditions set by the teacher.</p>
                                    <p>If a box with a solid border is shown, you can click it to tick the box when you think you have completed the activity. (Clicking it again removes the tick if you change your mind.)</p>
                                    </div> " data-html="true" tabindex="0" data-trigger="focus">
                                    <i class="icon question circle outline text-info fa-fw " aria-hidden="true"
                                       title="Help with Completion tick boxes"
                                       aria-label="Help with Completion tick boxes"></i>
                                </a>
                            </div>
                            <h2 class="accesshide">Topic outline</h2>
                            <ul class="topics">
                                <li id="section-0" class="section main clearfix" role="region"
                                    aria-label="About this course">
                                    <span class="hidden sectionname">About this course</span>
                                    <div class="left side"></div>
                                    <div class="right side">
                                        <img class="icon spacer" width="1" height="1" alt=""
                                             src="https://school.demo.moodle.net/theme/image.php/boost/core/1524376896/spacer">
                                    </div>
                                    <div class="content">
                                        <h3 class="sectionname">
                                            <span><a href="#section-0">About this course</a></span>
                                        </h3>
                                        <div class="section_availability"></div>
                                        <div class="summary">
                                            <div class="no-overflow">
                                                <p>This course explores
                                                    {{__($course->course_name)}} and its
                                                    importance for teachers and students!</p>
                                            </div>
                                        </div>
                                        <ul class="section img-text">
                                            <li class="activity choice modtype_choice " id="module-777">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance">
                                                                <a class="" onclick="" href="">
                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/choice/1524376896/icon"
                                                                         class="iconlarge activityicon" alt=" "
                                                                         role="presentation">
                                                                    <span class="instancename">{{__('Course ID: ')}}
                                                                        <span class=""> {{__($course->id)}}</span>
                                                                    </span>
                                                                </a>
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
                                                            <div class="activityinstance">
                                                                <a class="" onclick="" href="">
                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/survey/1524376896/icon"
                                                                         class="iconlarge activityicon" alt=" "
                                                                         role="presentation">
                                                                    <span class="instancename">{{__('Max Students : ')}} {{__($course->max_students)}}</span>
                                                                </a>

                                                                <a style="float: right;" class="" onclick=""
                                                                   href="{{route('teacher.student.index', ['course_id'=>$course->id])}}">
                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/workshop/1525222857/icon"
                                                                         class="iconlarge activityicon" alt=" "
                                                                         role="presentation">
                                                                    <span class="instancename">{{__('List details')}}</span>
                                                                </a>
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
                                                            <div class="activityinstance">
                                                                <a class="" onclick="" href="">
                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/survey/1524376896/icon"
                                                                         class="iconlarge activityicon" alt=" "
                                                                         role="presentation">
                                                                    <span class="instancename">{{__('Max groups: ')}}{{__($course->max_groups)}}</span>
                                                                </a>
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
                                                            <div class="activityinstance">
                                                                <a class="" onclick="" href="">
                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/data/1524376896/icon"
                                                                         class="iconlarge activityicon" alt=" "
                                                                         role="presentation">
                                                                    <span class="instancename">{{__('Start date: ')}}</span>
                                                                    <span class=""> {{__($course->start_date)}}</span>
                                                                </a>
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
                                                            <div class="activityinstance">
                                                                <a class="" onclick="" href="">
                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/data/1524376896/icon"
                                                                         class="iconlarge activityicon" alt=" "
                                                                         role="presentation">
                                                                    <span class="instancename">{{__('End date: ')}}</span>
                                                                    <span class="">  {{__($course->end_date)}}</span></a>
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
                                    aria-label="Group work and assessment">
                                    <span class="hidden sectionname">Group work and assessment</span>
                                    <div class="left side"></div>
                                    <div class="right side">
                                        <img class="icon spacer" width="1" height="1" alt=""
                                             src="https://school.demo.moodle.net/theme/image.php/boost/core/1524376896/spacer">
                                    </div>
                                    <div class="content">
                                        <h3 class="sectionname">
                                            <span><a href="#">{{__($lesson->title)}}</a></span>
                                        </h3>
                                        <div class="section_availability"></div>
                                        <div class="summary"></div>
                                        <ul class="section img-text">
                                            @foreach($lesson->meetings as $meeting)
                                                <li class="activity assign modtype_assign " id="module-787">
                                                    <div>
                                                        <div class="mod-indent-outer">
                                                            <div class="mod-indent"></div>
                                                            <div>
                                                                <div class="activityinstance">
                                                                    <a class="" target="_blank"
                                                                       href="{{route('teacher.meeting.join', ['$meetingId' => $meeting->id])}}">
                                                                        <img src="https://school.demo.moodle.net/theme/image.php/boost/chat/1526356860/icon"
                                                                             class="iconlarge activityicon" alt=" "
                                                                             role="presentation">
                                                                        <span class="instancename"><strong>Online meeting:</strong> {{$meeting->title}}</span>
                                                                    </a>
                                                                    <span style="margin-left: 15px">
                                                                        <a href="{{route('teacher.meeting.end', ['$meetingId' => $meeting->id])}}">
                                                                            <button class="ui negative basic button">
                                                                                End this meeting
                                                                            </button>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @foreach($lesson->homeworks as $homework)
                                                <li class="activity assign modtype_assign " id="module-787">
                                                <div>
                                                    <div class="mod-indent-outer">
                                                        <div class="mod-indent"></div>
                                                        <div>
                                                            <div class="activityinstance">
                                                                <a class=""
                                                                   href="{{route('teacher.homework.view', ['homeworkId' => $homework->id])}}">
                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/assign/1524376896/icon"
                                                                         class="iconlarge activityicon" alt=" "
                                                                         role="presentation">
                                                                    <span class="instancename">
                                                                        <strong>Homework:</strong>{{$homework->title}}
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                                <li class="activity scorm modtype_scorm " id="module-790">
                                                    <div>
                                                        <div class="mod-indent-outer">
                                                            <div class="mod-indent"></div>
                                                            <div>
                                                                <div class="activityinstance">
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Add activity
                                                                            <span class="caret"></span></button>
                                                                        <ul class="dropdown-menu" style="list-style-type: none;">
                                                                            <li>
                                                                                <a class="" onclick=""
                                                                                   href="{{route('teacher.homework.create_form', [
                                                                    'course_id' => $course->id,
                                                                    'lesson_id' => $lesson->id
                                                                    ])}}">
                                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/scorm/1524376896/icon"
                                                                                         class="iconlarge activityicon" alt=" "
                                                                                         role="presentation">
                                                                                    <span class="instancename">Create Homework</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <span class="meeting_modal_open" lesson="{{$lesson->id}}" data-toggle="modal" data-target="#meetingModal">
                                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/chat/1526356860/icon"
                                                                                         class="iconlarge activityicon" alt=" "
                                                                                         role="presentation">
                                                                                    <span class="instancename">Online meeting</span>
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <a class="" data-toggle="modal" data-target="#meetingModal">
                                                                                    <img src="https://school.demo.moodle.net/theme/image.php/boost/scorm/1524376896/icon"
                                                                                         class="iconlarge activityicon" alt=" "
                                                                                         role="presentation">
                                                                                    <span class="instancename">New resourse</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
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
                            <div id="changenumsections" class="mdl-right">
                                <a class="add-sections button"
                                   href="{{route('teacher.lesson.create',['courseId' => $course->id])}}">
                                    <i class="icon plus" aria-hidden="true" title="Add topics"
                                       aria-label="Add topics"></i>
                                    Add topics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="modal fade" id="meetingModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add new online meeting</h4>
                </div>
                <div class="modal-body">
                    <label for="meeting_title">Meeting title:</label>
                    <input type="text" name="meeting_title" id="meeting_title" required>
                </div>
                <div class="modal-footer">
                    <button type="button" id="create_meeting" data-dismiss="modal" data-backdrop="false" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
@endsection

@section('js')
    <script src="{{asset('js/code/course/lesson.js')}}">
    </script>
@endsection