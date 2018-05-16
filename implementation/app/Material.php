<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $guarded = [];
    public function lesson(){ //6
        return $this->belongsTo('App\Lesson');
    }
}
