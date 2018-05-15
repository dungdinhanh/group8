<?php

namespace App\Http\Services;

use sanduhrs\BigBlueButton;

class BBBService
{
    protected $bbb;

    public function __construct()
    {
        $url = 'http://test-install.blindsidenetworks.com/bigbluebutton/';
        $secret = '8cd8ef52e8e101574e400365b55e11a6';
        $endpoint = 'api/';

        $this->bbb = new BigBlueButton($url, $secret, $endpoint);
    }

    public function getVersion()
    {
        return $version = $this->bbb->server->getVersion();
    }

    public function addMeeting($id)
    {
        $meeting = $this->bbb->server->addMeeting([
            'id' => $id,
            'attendeePW' => 'Guphei4i',
            'moderatorPW' => 'ioy9Xep9',
            'name' => 'A BigBlueButton meeting',
            'welcome' => 'Welcome to %%CONFNAME%%.',
            'logoutURL' => 'https://example.org/',
            'record' => true,
            'autoStartRecording' => true,
            'muteOnStart' => true,
            'webcamsOnlyForModerator' => true,
        ]);

        return $meeting->getId();
    }

    public function getMeeting($meetingId)
    {
        return $this->bbb->server->getMeeting($meetingId);
    }

    public function join($meetingId, $name, $isMod = false)
    {
        $meeting = $this->getMeeting($meetingId);
        $url = $meeting->join($name, $isMod);

        return $url;

    }

}
