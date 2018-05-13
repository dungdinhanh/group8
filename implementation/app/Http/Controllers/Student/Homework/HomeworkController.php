<?php

namespace App\Http\Controllers\Student\Homework;

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
use Illuminate\Support\Facades\Auth;

class HomeworkController extends Controller
{

    public function showHomework($homework_id){
        $homework = Homework::where('id', '=',$homework_id)->get()->first();
        $lesson = $homework->lesson;
        $course = $lesson->course;
        $dead_line = date("Y-m-d H:i:s",strtotime($homework->dead_line));
        $dead_line = new \DateTime($dead_line);
        $current = new \DateTime();
        $time_left = date_diff($dead_line, $current)->format('%d days %H hours %i minutes');

        $submission = Submission::where('homework_id', $homework_id)
                                ->where('student_id', Auth::user()->student->id)
                                ->first();


        if ($dead_line > $current) $overtime = false;
        else $overtime=true;
        return view('student.homework.view_homework',
            [
                'homework' => $homework,
                'lesson' => $lesson->lesson_title,
                'course' => $course->course_name,
                'submission' =>$submission,
                'time_left' => $time_left,
                'overtime' => $overtime
            ]
        );
    }
}
