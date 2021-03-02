<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/register', [UserController::class, 'store'])->name('register');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');








Route::get('/test', function () {
	return view('testElement');
});

