@foreach($courses as $course)
@csrf
<div class="coursebox clearfix odd first collapsed" data-courseid="66"
     data-type="1">
    <div class="info">
        <div class="coursename"><a class=""
                                   href="{{route('list_lessons', ['course_id'=>$course->id])}}">{{__($course->course_name)}}</a>
        </div>
        <div class="moreinfo"><a title="Summary"
                                 href="{{route('list_lessons', ['course_id'=>$course->id])}}"><i
                        class="icon fa fa-sign-in fa-fw "
                        aria-hidden="true" title="Summary"
                        aria-label="Summary"></i></a></div>
        <div class="enrolmenticons"><i
                    class="icon fa fa-unlock-alt fa-fw "
                    aria-hidden="true" title="Guest access"
                    aria-label="Guest access"></i></div>
    </div>
    <div class="content"></div>
</div>
@endforeach