<?php

namespace App\Http\Controllers\Student\Homework;

use App\Homework;
use App\Submission;
use App\User;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SubmissionController extends Controller
{
    //

    public function showSubmissionForm($homework_id){
        //required to have 'homework_id' as the input
        $homework = Homework::find($homework_id);
        $course = $homework->course;
        $user = Auth::user();
        $student = $user->student;
        return view('student.homework.submission.submission_form', [
            'homework' => $homework,
            'course' => $course,
            'student' => $student]);
    }




    public function addSubmission(Request $request){// move to submission package
        $homework_id = $request->input('homework_id');

        $submission = new Submission();
        $submission->student_id = $request->input('student_id');
        $submission->course_id = $request->input('course_id');
        $submission->content = $request->input('content');
        $submission->note = $request->input('note');
        $submission->homework_id = $homework_id;
        $homework = Homework::find($homework_id);
        $dead_line = $homework->dead_line;
        $dead_line = new \DateTime($dead_line);
        $current = new \DateTime();
        if($dead_line >= $current) $over_time = false;
        else $over_time = true;
        if ($over_time == false)$submission->overtime = 0;
        else $submission->overtime = date_diff($dead_line, $current);
        $submission->save();

        $noti = Notification::create([
            'sender_id' => Auth::user()->id,
            'receiver_id' => $homework->course->teacher->user->id,
            'message' => "there are new submission",
            'type' => 'Submission',
            'status' => 0,
            'assigned_id' => $submission->id
        ]);

        return redirect()->route('student.homework.view', ['homework_id' => $homework_id]);
    }
}
