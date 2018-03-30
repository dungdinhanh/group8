<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    public function course(){
        //24
        $this->belongsTo('App\Course', 'course_id');
    }

    public function homework(){
        //30
        $this->hasMany('App\Homework', 'lesson_id');
    }
}
