<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lesson
 *
 * @mixin \Eloquent
 */
class Lesson extends Model
{
    //
    public function course(){
        //24
        return $this->belongsTo('App\Course');
    }

    public function homeworks(){
        //30
        return $this->hasMany('App\Homework');
    }

    public function meetings(){
        //30
        return $this->hasMany('App\Meeting');
    }

    public function materials(){
        //30
        return $this->hasMany('App\Material');
    }
}
