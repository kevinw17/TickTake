<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function show($id)
    {
    
        $datas = DB::select(
            "
            SELECT ed.id AS `EventDetailID`, 
                   e.name AS `EventName`, 
                   e.pict AS `EventPict`, 
                   ed.event_date AS `EventDate`, 
                   ed.price AS `EventPrice`, 
                   o.name AS `OrganizerName`, 
                   o.logo AS `OrganizerLogo`,
            FROM event_details ed
            JOIN events e ON e.id = ed.event_id
            JOIN organizers o ON o.id = e.organizer_id
            "
        );

        return view('events', [
            "title" => "All Events",
            "events" => $datas
        ]);
    }
}
