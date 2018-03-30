<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function user(){ //4
        $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function courses(){ //11
        $this->hasMany('App\Course', 'teacher_id');
    }

    public function reviews(){ //13
        $this->hasMany('App\Reviews', 'teacher_id');
    }

}
