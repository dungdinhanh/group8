<?php

namespace App\Http\Controllers\Notification;

use App\Course;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public static function addClassNotification($sender_id, $course_id, $message, $type)
    {
        $course = Course::where('id', '=', $course_id)->get()->first();
        $students = $course->students;
        foreach ($students as $student)
        {
            $user = $student->user;
            $notification = new Notification();
            $notification->receiver_id = $user->id;
            $notification->sender_id = $sender_id;
            $notification->message = $message;
            $notification->type = $type;
            $notification->save();
        }
    }
    //
    public static function addNotification($sender_id, $receiver_id, $message, $type)
    {
        $notification = new Notification();
        $notification->sender_id = $sender_id;
        $notification->receiver_id = $receiver_id;
        $notification->message = $message;
        $notification->type = $type;
        $notification->status = 1;
        $notification->assigned_id = 0;
        $notification->save();
    }



    public function listReceivedNotification($receiver_id)
    {
        $notification = Notification::where('receiver_id', '=', $receiver_id);
        $notifications = $notification->get();
        foreach ($notifications as $notification) {
            $people[$notification->id] = $notification->sender->full_name;
        }

        return view('notification.list_notification', [
            'notifications' => $notifications,
            'people' => $people
        ]);
        //return view(wait for view)
    }

    public function listSentNotification($sender_id)
    {
        $notification = Notification::where('sender_id', '=', $sender_id);
        $notifications = $notification->get();
        foreach ($notifications as $notification) {
            $people[$notification->id] = $notification->receiver->full_name;
        }
        return view('notification.list_notification', [
            'notifications' => $notifications,
            'people' => $people
        ]);
        //return view(wait for view)
    }

    public function readNotification($notification_id)
    {

    }


}
