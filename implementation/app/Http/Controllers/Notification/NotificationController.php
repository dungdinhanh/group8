<?php

namespace App\Http\Controllers\Notification;

use App\Course;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NotificationController extends Controller
{
    public static function addClassNotification($sender_id, $course_id, $message, $type)
    {
        $course = Course::where('id', '=', $course_id)->get()->first();
        $students = $course->getStudents();
        foreach ($students as $student)
        {
            self::addNotification($sender_id, $student->user_id, $message, $type);
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

    public function index()
    {
        $user = Auth::user();
        $notification = Notification::where('receiver_id', $user->id);

        return $notification;
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
        $notifications = Notification::where('sender_id', '=', $sender_id)->get();
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
