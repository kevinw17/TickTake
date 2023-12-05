<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Models\Event;
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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/events', [EventController::class, 'show']);

Route::get('/aboutUs', function () {
    return view('aboutUs', [
        "title" => "About Us"
    ]);
});

Route::get('/signin', function () {
    return view('signin', [
        "title" => "Sign In"
    ]);
});

Route::get('/aboutUs/{id}', function ($id) {
    return view('user_aboutUs', [
        "title" => "About Us",
        "name" => "Abraham"
    ]);
});