<?php

namespace App\Http\Controllers\Homework;

use App\Homework;
use App\Submission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubmissionController extends Controller
{
    //

    public function showSubmissionForm($homework_id){
        //required to have 'homework_id' as the input
        $homework = Homework::where('id','=', $homework_id)->get()->first();
        $course = $homework->course;
        $user = User::where('id', '=', \Auth::user()->id)->get()->first();
        $student = $user->student;
        return view('homework.submission.submission_form', [
            'homework' => $homework,
            'course' => $course,
            'student' => $student]);
    }




    public function addSubmission(Request $request){// move to submission package
        $submission = new Submission();
        $submission->student_id = $request->input('student_id');
        $submission->course_id = $request->input('course_id');
        $submission->title = $request->input('title');
        $submission->content = $request->input('content');
        $submission->note = $request->input('note');
        $submission->homework_id = $request->input('homework_id');
        $homework = Homework::where('id', '=', $request->input('homework_id'))->get()->first();
        $dead_line = $homework->dead_line;
        $dead_line = new \DateTime($dead_line);
        $current = new \DateTime();
        if($dead_line >= $current) $over_time = false;
        else $over_time = true;
        if ($over_time == false)$submission->overtime = 0;
        else $submission->overtime = date_diff($dead_line, $current)->h;
        $submission->save();
        return $this->viewSubmission($submission, $homework);
    }

    public function viewSubmission($submission, $homework){
        $course = $homework->course;
        return view('homework.submission.submission_view',[
            'homework'=>$homework,
            'submission'=>$submission,
            'student_name' => \Auth::user()->full_name,
            'course_name' => $course->course_name
        ]);
    }


    public function getViewSubmission($submission_id){
        $submission = Submission::where('id', '=', $submission_id)->get()->first();
        $homework = $submission->homework;
        return $this->viewSubmission($submission, $homework);
    }


}
