<?php

namespace App\Http\Controllers\Notification;

use App\Course;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NotificationController extends Controller
{
    public static function addClassNotification($sender_id, $course_id, $assigned_id = 0, $message, $type)
    {
        $course = Course::where('id', '=', $course_id)->get()->first();
        $students = $course->getStudents();
        foreach ($students as $student)
        {
            self::addNotification($sender_id, $student->user_id, $assigned_id, $message, $type);
        }
    }
    //
    public static function addNotification($sender_id, $receiver_id, $assigned_id, $message, $type)
    {
        $notification = new Notification();
        $notification->sender_id = $sender_id;
        $notification->receiver_id = $receiver_id;
        $notification->message = $message;
        $notification->type = $type;
        $notification->status = 0;
        $notification->assigned_id = $assigned_id;
        $notification->save();
    }

    public function index()
    {
        $user = Auth::user();
        $notifications = Notification::where('receiver_id', $user->id)
                                        ->orderByDesc('id')
                                        ->get();

        $unreadCount = Notification::unreadCount($user->id);

        return view('layouts.notify')
            ->with('notifications', $notifications)
            ->with('unreadCount', $unreadCount);
    }

    public function read($notification_id)
    {
        $notification = Notification::find($notification_id);
        $notification->status = 1;
        $notification->save();

        return redirect($notification->getLink());
    }


}
