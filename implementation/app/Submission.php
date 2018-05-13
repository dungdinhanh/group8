<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Submission
 *
 * @mixin \Eloquent
 */
class Submission extends Model
{
    //
    public function student(){
        //18
        return $this->belongsTo('App\Student');
    }

    public function course(){
        //22
        return $this->belongsTo('App\Course');
    }

    public function review(){
        //26
        return $this->hasOne('App\Review');
    }

    public function homework(){
        //27
        return $this->belongsTo('App\Homework');
    }
}
