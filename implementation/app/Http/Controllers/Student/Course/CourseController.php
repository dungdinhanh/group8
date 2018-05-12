<?php

namespace App\Http\Controllers\Student\Course;

use App\Course;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CourseController extends Controller
{
    public function listLessons($course_id)
    {
        $course = Course::find($course_id);
        $lessons = $course->lessons;
        $students = $course->students;
        return view('course.lesson_list', ['lessons' => $lessons,
            'course' => $course]);
    }

    public function searchCourse(Request $request)
    {
        $search = $request->search;
        $courses = Course::where('teacher_id', Auth::user()->teacher->id)
                        ->where('course_name', 'LIKE', "%$search%")->get();

        return view('course.course_search', ['courses' => $courses]);
    }
}
