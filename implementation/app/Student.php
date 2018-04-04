<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @mixin \Eloquent
 */
class Student extends Model
{
    //
    public function user(){ //6
        return $this->belongsTo('App\User', 'student_id');
    }
    public function submissions(){ //17
        return $this->hasMany('App\Submission', 'student_id');
    }

    public function courses(){ //15
        return $this->belongsToMany('App\Submission', 'enrollments',
            'course_id', 'student_id');
    }
}
