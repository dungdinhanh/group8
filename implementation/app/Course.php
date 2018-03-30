<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function teacher(){//12
        $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function students(){//16
        $this->belongsToMany('App\Student', 'enrollments');// this assume to have default
    }

    public function submissions(){//19
        $this->hasMany('App\Submission', 'course_id');
    }

    public function homework(){ //20
        $this->hasMany('App\Homework'); //this assume to have default course_id
    }

    public function lessons(){ //21
        $this->hasMany('App\Lesson'); //assume to have default
    }
}
