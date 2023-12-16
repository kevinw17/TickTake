<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('profile', [
            "title" => "My Profile"
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'max:255',
            'phone_number' => 'max:15'
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);

        return back()->with('success', 'Your profile has been updated!');
    }
}
