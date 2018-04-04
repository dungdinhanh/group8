<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Homework
 *
 * @mixin \Eloquent
 */
class Homework extends Model
{
    //
    public function course(){
        //23
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function submissions(){
        //28
        return $this->hasMany('App\Submission', 'submission_id');
    }

    public function lesson(){
        //29
        return $this->belongsTo('App\Lesson', 'lesson_id');
    }
}
