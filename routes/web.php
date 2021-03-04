<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;




// Landing Page, Registration and Profile setup pages
Route::get('/', function () {return view('welcome');});
Route::post('/register', [UserController::class, 'store'])->name('register');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile/edit/extra', [ProfileController::class, 'editExtraInfo'])->name('profile.edit.extra');
Route::put('/profile/extra', [ProfileController::class, 'updateExtraInfo'])->name('profile.update.extra');
// Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
// Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');




// /profile/deactivate








Route::get('/test', function () {
	return view('testElement');
});

