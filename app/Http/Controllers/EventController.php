<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EventDetail;
use App\Models\Organizer;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show()
    {

        $organizers = Organizer::all();
        $events = Event::all();
        $event_details = EventDetail::all();
        $categories = Category::all();

        return view('events', [
            "title" => "All Events",
            "organizers" => $organizers,
            "events" => $events,
            "event_details" => $event_details,
            "categories" => $categories,
            "event" => [
                "event_title" => "Steve Aoki's",
                "event_date" => "10 Dec 2023",
                "event_price" => "Rp. 1.249.000",
                "producer_name" => "Prestige Promotion",
                "producer_logo" => "R.png"
            ]
        ]);
    }
}
