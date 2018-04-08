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
            $course = Course::where('id', $request['course_id'])->get()->first();
            $lesson = Lesson::where('id', $request['lesson_id'])->get()->first();
            return view('homework.create_homework', ['course' => $course, 'lesson'=>$lesson]);
    }

    public function createHomework(Request $request)
    {
        $homework = new Homework();
        $homework->homework_no = $request->input('homework_no');
        $homework->title = $request->input('title');
        $homework->content = $request->input('content');
        $homework->start = $request->input('start');
        $homework->dead_line = $request->input('dead_line');
        $homework->lesson_id = $request->input('lesson_id');
        $homework->course_id = $request->input('course_id');
        $homework->save();
        return redirect()->route('view_homework', ['homework_id' => $homework->id]);
    }


    public function showHomework($homework_id){
        $homework = Homework::where('id', '=',$homework_id)->get()->first();
        $lesson = $homework->lesson;
        $course = $lesson->course;
        $time_left = $homework->dead_line - $homework->start;
        return view('homework.view_homework', ['homework' => $homework,
            'lesson' => $lesson->lesson_title,
            'course' => $course->course_name,
                'time_left' => $time_left]

        );
    }

}
