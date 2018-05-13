<?php

namespace App\Http\Controllers\Student\Course;

use App\Course;
use App\User;
use App\Student;
use App\Enrollment;
use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function index($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $lessons = $course->lessons;
        $students = $course->students;
        return view('student.course.lesson_list', ['lessons' => $lessons,
            'course' => $course]);
    }
}
