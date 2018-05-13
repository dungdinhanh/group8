<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Teacher
 *
 * @mixin \Eloquent
 */
class Teacher extends Model
{
    protected $guarded = [];
    //
    public function user(){ //4
        return $this->belongsTo('App\Teacher');
    }

    public function courses(){ //11
        return $this->hasMany('App\Course');
    }

    public function reviews(){ //13
        return $this->hasMany('App\Review');
    }

}
