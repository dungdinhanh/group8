<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Meeting;
use App\Http\Services\BBBService;
use Auth;

class MeetingController extends Controller
{
    public function store(Request $request, $lesson_id)
    {
        $metting = Meeting::create([
            'title' => $request->input('meeting_title'),
            'lesson_id' => $lesson_id
        ]);

        $bbb = new BBBService();
        $mettingId = $bbb->addMeeting($metting->id);

        return $mettingId;
    }

    public function end($meetingId)
    {
        $bbb = new BBBService();

        Meeting::find($meetingId)->delete();

        $url = $bbb->end($meetingId);

        return back();
    }



    public function join($meetingId)
    {
        $user = Auth::user();
        $bbb = new BBBService();

        $url = $bbb->join($meetingId, $user->full_name, true);

        return redirect($url);
    }
}
