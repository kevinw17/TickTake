<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/aboutUs', function () {
    return view('aboutUs', [
        "title" => "About Us"
    ]);
});

Route::get('/events', function () {
    return view('events', [
        "title" => "All Events"
    ]);
});

Route::get('/signin', function () {
    return view('signin', [
        "title" => "Sign In"
    ]);
});