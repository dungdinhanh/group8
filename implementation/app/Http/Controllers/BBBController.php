<?php

namespace App\Http\Controllers;

use App\Http\Services\BBBService;
class BBBController extends Controller
{
    public function index()
    {
        $bbb = new BBBService();
        $version = $bbb->getVersion();
        print "$version<br />\n";

        $meetingId = $bbb->addMeeting('1');

        $metting = $bbb->getMeeting($meetingId);

        print '<pre>' . print_r($metting, true) . "</pre>\n\n";

        // Get meeting join URL for a moderator.
        $full_name = 'Martin Moderator';
        $url = $bbb->join($meetingId, $full_name);
        print "Hi $full_name, you are a moderator. Please join the call via $url<br />\n\n";
    }
}
