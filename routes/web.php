<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/aboutUs', function () {
    return view('aboutUs', [
        "title" => "About Us"
    ]);
});

Route::get('/aboutUs/{id}', function ($id) {
    return view('user_aboutUs', [
        "title" => "About Us",
        "name" => "Abraham"
    ]);
});

Route::get('/contactUs', function () {
    return view('contactUs', [
        "title" => "contact us"
    ]);
});

Route::get('/eventdetail', function () {
    return view('eventdetail', [
        "title" => "event detail"
    ]);
});