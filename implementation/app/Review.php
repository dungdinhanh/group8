<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Review
 *
 * @mixin \Eloquent
 */
class Review extends Model
{
    //
    public function teacher(){
        //14
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function submission()
    {
        //25
        return $this->belongsTo('App\Submission', 'submission_id');
    }
}
