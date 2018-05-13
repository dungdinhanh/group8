<?php

namespace App\Http\Controllers\Student\Course;

use App\Course;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CourseController extends Controller
{
    public function listCourses()
    {
        $user = Auth::user();
        $courses = $user->student->courses;
        return view('course.course_list', ['courses' => $courses]);
    }

    public function searchCourse(Request $request)
    {
        $search = $request->search;
        $courses = Course::where('teacher_id', Auth::user()->teacher->id)
                        ->where('course_name', 'LIKE', "%$search%")->get();

        return view('course.course_search', ['courses' => $courses]);
    }
}
