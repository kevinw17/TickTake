<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $datas = DB::select(
            "
            SELECT e.name AS `EventName`, 
                   e.pict AS `EventPict`, 
                   ed.event_date AS `EventDate`, 
                   ed.event_time AS `EventTime`, 
                   ed.price AS `EventPrice`, 
                   o.name AS `OrganizerName`, 
                   o.logo AS `OrganizerLogo`,
                   c.name AS `CategoryName`
            FROM event_details ed
            JOIN events e ON e.id = ed.event_id
            JOIN organizers o ON o.id = e.organizer_id
            JOIN categories c ON c.id = ed.category_id
            "
        );

        return view('home', [
            "title" => "Home Page",
            "events" => $datas,
            "categories" => $categories
        ]);
    }
}
