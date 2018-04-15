@foreach($courses as $course)
    @csrf
    <div class="row nav-link">
        <a class="nav-link" href="{{route('list_lessons', ['course_id'=>$course->id])}}">
            {{__($course->course_name)}}
        </a>
    </div>
@endforeach