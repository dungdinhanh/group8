<?php

namespace App\Http\Controllers\Student\Homework;

use App\Review;
use App\Submission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    //
    public function getReviewForm($submission_id){
        $submission = Submission::where('id', '=', $submission_id)->get()->first();
        $homework = $submission->homework;
        $course = $homework->course;
        return view('homework.review.review_form', [
            'homework' => $homework,
            'submission' => $submission,
            'student_name' => \Auth::user()->full_name,
            'teacher_id' => $course->teacher_id
        ]);
    }


    public function addReview(Request $request){
        $review = new Review();
        $review->submission_id = $request->input('submission_id');
        $review->teacher_id = $request->input('teacher_id');
        $review->general_comment = $request->input('general_comment');
        $review->mark = $request->input('mark');
        $review->comment = $request->input('comment');
        $review->save();

        return redirect()->route("home");
    }

}
