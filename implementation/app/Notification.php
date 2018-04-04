<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Notification
 *
 * @mixin \Eloquent
 */
class Notification extends Model
{
    //
    public function receiver(){
        //9
        return $this->belongsTo('App\User', 'receiver_id');
    }

    public function sender(){
        return $this->belongsTo('App\User', 'sender_id');
    }
}
