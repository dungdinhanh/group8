<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\Lesson;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CourseController extends Controller
{
    //
    public function listCourses($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $teacher = $user->teacher;
        $courses = $teacher->courses;
        return view('course.course_list', ['courses' => $courses]);
    }

    public function listLessons($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $lessons = $course->lessons;
        return view('course.lesson_list', ['lessons' => $lessons,
            'course' => $course]);
    }


    public function createCourse()
    {
        return view('course.course_create');
    }

    public function storeCourse(Request $request)
    {
        $input = $request->only('course_name',
                                'max_students',
                                'max_groups',
                                'start_date',
                                'end_date');
        $course = new Course();
        $course->teacher_id = Auth::user()->teacher->id;
        $course->fill($input);
        $course->save();

        return redirect()->route('list_lessons', ['course_id' => $course->id]);
    }
}
