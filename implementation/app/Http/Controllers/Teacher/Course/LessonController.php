<?php

namespace App\Http\Controllers\Teacher\Course;

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
        return view('course.lesson_list', ['lessons' => $lessons,
            'course' => $course]);
    }

    public function create($course_id)
    {
        $course = Course::find($course_id);

        return view('course.lesson_create')->with('course', $course);
    }

    public function store(Request $request)
    {
        $lesson = Lesson::findOrNew(0);
        $lesson->no = $request->lesson_no;
        $lesson->title = $request->title;
        $lesson->content = $request->input('content');
        $lesson->course_id = $request->course_id;
        $lesson->note = $request->note;

        $lesson->save();

        return redirect()->route('teacher.lesson.list', ['course_id' => $request->course_id]);
    }
}
