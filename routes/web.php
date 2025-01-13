<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('auth.index');
});
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/signin', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::resource('/events', EventController::class);
Route::get('/events/list/all', [EventController::class, 'showAll'])->name('events.show_all');