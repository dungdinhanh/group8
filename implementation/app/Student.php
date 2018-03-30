<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function user(){ //6
        $this->belongsTo('App\User', 'student_id');
    }
    public function submissions(){ //17
        $this->hasMany('App\Submission', 'student_id');
    }

    public function courses(){ //15
        $this->belongsToMany('App\Submission', 'enrollments',
            'course_id', 'student_id');
    }
}
