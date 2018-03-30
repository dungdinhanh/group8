<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    //
    public function course(){
        //23
        $this->belongsTo('App\Course', 'course_id');
    }

    public function submissions(){
        //28
        $this->hasMany('App\Submission', 'submission_id');
    }

    public function lesson(){
        //29
        $this->belongsTo('App\Lesson', 'lesson_id');
    }
}
