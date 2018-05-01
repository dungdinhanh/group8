<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CourseController extends Controller
{
    //
    public function listCourses()
    {

        $user = Auth::user();
        $teacher = $user->teacher;
        $courses = $teacher->courses;
        return view('course.course_list', ['courses' => $courses]);
    }

    public function listLessons($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $lessons = $course->lessons;
        $students = $course->students;
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

    public function searchCourse(Request $request)
    {
        $search = $request->search;
        $courses = Course::where('teacher_id', Auth::user()->teacher->id)
                        ->where('course_name', 'LIKE', "%$search%")->get();

        //return $courses;

        return view('course.course_search', ['courses' => $courses]);
    }
}
