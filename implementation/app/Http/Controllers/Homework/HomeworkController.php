<?php

namespace App\Http\Controllers\Homework;

use App\Course;
use App\Homework;
use App\Lesson;
use App\Notification;
use App\Submission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\HomeworkCreate;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Notification\NotificationController;
use DateTime;

class HomeworkController extends Controller
{

    public function showCreateHomeworkForm(Request $request)
    {
            $course = Course::where('id', $request['course_id'])->get()->first();
            $lesson = Lesson::where('id', $request['lesson_id'])->get()->first();
            return view('homework.create_homework', ['course' => $course, 'lesson'=>$lesson]);
    }

    private function getCreateHomeworkMessage($homework)
    {
        $message = "";
        $message = $message."New homework is created<br>";
        $message = $message."Course : ".$homework->course->course_name."<br>";
        $message = $message."Homework No: ".$homework->homework_no."<br>";
        $message = $message."Homework Title: ".$homework->title."<br>";
        $message = $message."Deadline : ".$homework->dead_line."<br>";
        return $message;
    }


    private function getCreateHomeworkType($homework)
    {
        $type = "";
        $type = $type."[HOMEWORK]";
        return $type;
    }

    public function createHomework(HomeworkCreate $request)
    {//create homework then send the notification for the whole class
        $homework = new Homework();
        $homework->title = $request->input('title');
        $homework->content = $request->input('content');
        $homework->dead_line = $request->input('dead_line');
        $homework->lesson_id = $request->input('lesson_id');
        $homework->course_id = $request->input('course_id');
        $homework->save();
        $message = $this->getCreateHomeworkMessage($homework);
        $type = $this->getCreateHomeworkType($homework);
        //add notification
        NotificationController::addClassNotification(\Auth::user()->id,
            $homework->course_id, $message, $type);
        return redirect()->route('teacher.homework.view', ['homework_id' => $homework->id]);
    }


    public function showHomework($homework_id){
        $homework = Homework::where('id', '=',$homework_id)->get()->first();
        $lesson = $homework->lesson;
        $course = $lesson->course;
        $dead_line = date("Y-m-d H:i:s",strtotime($homework->dead_line));
        $dead_line = new \DateTime($dead_line);
        $current = new \DateTime();
        $time_left = date_diff($dead_line, $current)->format('%d days %H hours %i minutes');

        if ($dead_line > $current) $overtime = false;
        else $overtime=true;
        return view('homework.view_homework', ['homework' => $homework,
            'lesson' => $lesson->lesson_title,
            'course' => $course->course_name,
                'time_left' => $time_left,
                'overtime' => $overtime]
        );
    }
}
