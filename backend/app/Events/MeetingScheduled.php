<?php

namespace App\Events;

use App\Models\Meeting;

class MeetingScheduled extends AbstractMeetingScheduled
{
    public function __construct(Meeting $meeting)
    {
        $this->broadcastName = 'meeting.created';
        parent::__construct($meeting);
    }
}
