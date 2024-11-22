<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('events.index');
});

Route::resource('/events', EventController::class);
Route::get('/events/list/all', [EventController::class, 'showAll'])->name('events.show_all');