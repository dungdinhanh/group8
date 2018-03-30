<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function teacher(){
        //14
        $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function submission()
    {
        //25
        $this->belongsTo('App\Submission', 'submission_id');
    }
}
