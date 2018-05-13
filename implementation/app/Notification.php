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
    protected $guarded = [];
    //
    public function receiver(){
        //9
        return $this->belongsTo('App\User', 'receiver_id');
    }

    public function sender(){
        return $this->belongsTo('App\User', 'sender_id');
    }

    public static function unreadCount($userId){
        return self::where('receiver_id', $userId)
                    ->where('status', 0)
                    ->count();
    }

    public function isUnread(){
        return $this->status == 0;
    }

    public function getLink() {
        $path = '/';
        switch ($this->type) {
            case '[HOMEWORK]':
                $path = '/student/homework/view/'.$this->assigned_id;
                break;
            case 'Submission':
                $path = '/';
            default:
                break;
        }

        return $path;
    }
}
