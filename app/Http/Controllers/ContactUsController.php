<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_Us;

class ContactUsController extends Controller
{
    //
    public function index()
    {
        return view('contactUs', [
            "title" => "Contact Us"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'topic' => 'required',
            'subject' => 'required|min:10|max:255',
        ]);

        Contact_Us::create($validatedData);

        return back()->with('success', 'Your message has been delivered! Thank you for contacting us!');
    }
}
