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
    protected $table = 'homework';
    public function course(){
        //23
        return $this->belongsTo('App\Course');
    }

    public function submissions(){
        //28
        return $this->hasMany('App\Submission');
    }

    public function lesson(){
        //29
        return $this->belongsTo('App\Lesson');
    }
}
