<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Meeting;
use App\Http\Services\BBBService;
use Auth;

class MeetingController extends Controller
{
    public function join($meetingId)
    {
        $user = Auth::user();
        $bbb = new BBBService();

        $url = $bbb->join($meetingId, $user->full_name);


        return redirect($url);
    }
}
