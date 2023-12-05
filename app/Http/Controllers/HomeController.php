<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "events" => [
                "event_title" => "Steve Aoki's",
                "event_date" => "10 Dec 2023",
                "event_price" => "Rp. 1.249.000",
                "producer_name" => "Prestige Promotion",
                "producer_logo" => "R.png"
            ]
        ]);
    }
}
