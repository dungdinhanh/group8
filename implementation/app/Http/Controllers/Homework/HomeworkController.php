<?php

namespace App\Http\Controllers\Homework;

use App\Course;
use App\Homework;
use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeworkController extends Controller
{

    public function showCreateHomeworkForm(Request $request)
    {
//            $course = Course::where('id', $request['course_id']);
//            $lesson = Lesson::where('id', $request['lesson_id']);
//            return view('homework.create_homework', ['course' => $course, 'lesson'=>$lesson]);
    }

    public function createHomework(Request $request)
    {
//        $homework = new Homework();
//        $homework->title = $request->input('title');
//        $homework->content = $request->input('content');
//        $homework->start = $request->input('start');
//        $homework->dead_line = $request->input('dead_line');
//        $homework->lesson_id = $request->input('lesson_id');
//        $homework->course_id = $request->input('course_id');
//        $homework->save();
    }


    public function showHomework(Request $request){

    }
}
