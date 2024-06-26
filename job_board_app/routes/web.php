<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('', fn() => to_route('jobs.index'));
Route::resource('jobs', JobController::class)
    ->only(['index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
