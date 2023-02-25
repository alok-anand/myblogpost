<?php

namespace App\Traits;

use App\Models\Event;
use App\Models\Eventdetail;


trait EventTrait
{
    public function getAllLatestEvents($country_id)
    {
        $country = (($country_id == 1) ? 'Canada' : (($country_id == 2) ? 'USA' : 'UK'));
        $this->event = new Eventdetail;
		$latest_events = $this->event->getAllActiveEvents()->where('event.country_id',$country)->take(3);
		$event_section =  view('events.event-section',['events'=> $latest_events->toArray()])->render();
        return $event_section;
    }
}