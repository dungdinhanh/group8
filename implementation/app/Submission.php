<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //
    public function student(){
        //18
        $this->belongsTo('App\Student', 'student_id');
    }

    public function course(){
        //22
        $this->belongsTo('App\Course', 'course_id');
    }

    public function review(){
        //26
        $this->hasOne('App\Review', 'submission_id');
    }

    public function homework(){
        //27
        $this->belongsTo('App\Homework', 'homework_id');
    }
}
