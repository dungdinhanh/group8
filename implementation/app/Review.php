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
        return $this->belongsTo('App\Teacher');
    }

    public function submission()
    {
        //25
        return $this->belongsTo('App\Submission');
    }
}
