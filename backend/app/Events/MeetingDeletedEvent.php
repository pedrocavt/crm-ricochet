<?php

namespace App\Events;

use App\Models\Meeting;
use Illuminate\Support\Facades\Log;

class MeetingDeletedEvent extends AbstractMeetingScheduled
{
    public function __construct(Meeting $meeting)
    {
        $this->broadcastName = 'meeting.deleted';
        parent::__construct($meeting);
    }
}
