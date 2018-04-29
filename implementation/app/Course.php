<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

/**
 * App\Course
 *
 * @mixin \Eloquent
 */
class Course extends Model
{
    protected $guarded = [];
    //
    public function teacher(){//12
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function students(){//16
        return $this->belongsToMany('App\Student', 'enrollments');// this assume to have default
    }


    public function enrollments()
    {
        return $this->hasMany('App\Enrollment');
    }

    public function submissions(){//19
        return $this->hasMany('App\Submission', 'course_id');
    }

    public function homework(){ //20
        return $this->hasMany('App\Homework'); //this assume to have default course_id
    }

    public function lessons(){ //21
        return $this->hasMany('App\Lesson'); //assume to have default
    }


    public function getStudents()
    {
        $students = $this->students()->get()->pluck('id');

        $user = User::join('students', 'users.id', '=', 'students.user_id')
            ->whereIn('students.id', $students)
            ->get();

        return $user;
    }
}
