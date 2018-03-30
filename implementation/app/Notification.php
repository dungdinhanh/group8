<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    public function receiver(){
        //9
        $this->belongsTo('App\User', 'receiver_id');
    }

    public function sender(){
        $this->belongsTo('App\User', 'sender_id');
    }
}
