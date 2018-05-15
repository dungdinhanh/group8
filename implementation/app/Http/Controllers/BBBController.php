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

        $meetingId = $bbb->addMeeting('2');

        $metting = $bbb->getMeeting($meetingId);

        print '<pre>' . print_r($metting, true) . "</pre>\n\n";
    }
}
