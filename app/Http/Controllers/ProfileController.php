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
        ]);

        auth()->user()->update([
            'name' => $request->name
        ]);

        return back()->with('success', 'Your profile has been updated!');
    }
}
