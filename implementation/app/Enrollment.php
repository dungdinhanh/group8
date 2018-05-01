<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = ['course_id', 'student_id'];
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
