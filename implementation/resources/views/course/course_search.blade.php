@foreach($courses as $course)
@csrf
<tr class="coursebox clearfix odd first collapsed" data-courseid="66" data-type="1">
    <th class="info">
        <div class="coursename">
            @if(Auth::user()->role_id == 2)
            <a class="" href="{{route('teacher.lesson.list', ['course_id'=>$course->id])}}">{{__($course->course_name)}}</a>
            @elseif(Auth::user()->role_id == 1)
            <a class="" href="{{route('student.lesson.list', ['course_id'=>$course->id])}}">{{__($course->course_name)}}</a>
            @endif
        </div>


        <div class="moreinfo">
            @if(Auth::user()->role_id == 2)
            <a title="Summary" href="{{route('teacher.lesson.list', ['course_id'=>$course->id])}}">
                <i class="icon sign in alternate" aria-hidden="true" title="Summary" aria-label="Summary"></i>
            </a>
            @elseif(Auth::user()->role_id == 1)
            <a title="Summary" href="{{route('student.lesson.list', ['course_id'=>$course->id])}}">
                <i class="icon sign in alternate" aria-hidden="true" title="Summary" aria-label="Summary"></i>
            </a>
            @endif
        </div>
    </th>
    <div class="content"></div>
</tr>
@endforeach