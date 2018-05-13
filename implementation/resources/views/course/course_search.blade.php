@foreach($courses as $course)
@csrf
<tr class="coursebox clearfix odd first collapsed" data-courseid="66" data-type="1">
    <th class="info">
        <div class="coursename">
            <a class="" href="{{route('teacher.lesson.list', ['course_id'=>$course->id])}}">{{__($course->course_name)}}</a>
        </div>
        <div class="moreinfo">
            <a title="Summary" href="{{route('teacher.lesson.list', ['course_id'=>$course->id])}}">
                <i class="icon sign in alternate" aria-hidden="true" title="Summary" aria-label="Summary"></i>
            </a>
        </div>

    </th>
    <div class="content"></div>
</tr>
@endforeach