<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $guarded = [];
    public function lesson(){ //6
        return $this->belongsTo('App\Lesson');
    }
}
