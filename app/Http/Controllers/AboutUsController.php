<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        return view('aboutUs', [
            "title" => "About Us"
        ]);
    }

    public function user_index($id)
    {
        return view('user_aboutUs', [
            "title" => "About Us",
            "name" => "Abraham"
        ]);
    }
}
