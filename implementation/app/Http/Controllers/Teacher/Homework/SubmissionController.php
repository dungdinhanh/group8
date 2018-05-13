<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Homework;
use App\Submission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubmissionController extends Controller
{
    public function index($homework_id)
    {
        $homework = Homework::find($homework_id);
        $submissions = $homework->submissions();

        dd($submissions);
    }
}
