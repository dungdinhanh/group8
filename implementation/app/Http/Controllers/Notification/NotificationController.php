<?php

namespace App\Http\Controllers\Notification;

use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    //
    public function addNotification($sender_id, $receiver_id, $message, $type)
    {
        $notification = new Notification();
        $notification->sender_id = $sender_id;
        $notification->receiver_id = $receiver_id;
        $notification->message = $message;
        $notification->type = $type;
        $notification->assigned_id = 0;
        $notification->save();
    }



    public function viewNotification($receiver_id)
    {

    }

    public function readNotification($notification_id)
    {

    }


}
