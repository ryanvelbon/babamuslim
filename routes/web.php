<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\DB;
Route::get('/', function () {
	$countries = DB::select('SELECT id, nicename FROM countries');
    return view('welcome', ['countries' => $countries]);
});

Route::get('/test', function () {
	return view('testElement');
});

Route::post('/register', [UserController::class, 'store'])->name('register');