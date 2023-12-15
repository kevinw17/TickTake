<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EventDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $datas = DB::select(
            "
            SELECT ed.id AS EventDetailID,
                   e.name AS EventName, 
                   e.pict AS EventPict, 
                   DATE_FORMAT(ed.event_date, '%M %d, %Y') AS EventDate, 
                   ed.price AS EventPrice, 
                   o.name AS OrganizerName, 
                   o.logo AS OrganizerLogo,
                   c.name AS CategoryName
            FROM event_details ed
            JOIN events e ON e.id = ed.event_id
            JOIN organizers o ON o.id = e.organizer_id
            JOIN categories c ON c.id = ed.category_id
            "
        );

        return view('events', [
            "title" => "All Events",
            "events" => $datas,
            "categories" => $categories
        ]);
    }

    public function show(EventDetail $id)
    {
        $datas = DB::select(
            "
            SELECT ed.id AS EventDetailID,
                   e.name AS EventName, 
                   e.pict AS EventPict, 
                   DATE_FORMAT(ed.event_date, '%M %d, %Y') AS EventDate, 
                   ed.price AS EventPrice,
                   ed.quota AS Quota,
                   ed.place AS EventPlace,
                   ed.city AS EventCity 
            FROM event_details ed
            JOIN events e ON e.id = ed.event_id
            "
        );

        return view('eventdetail', [
            "title" => "Event Detail",
            "details" => $datas,
            "event_detail" => $id
        ]);
    }
}
