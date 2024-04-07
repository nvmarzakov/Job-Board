<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::resource('jobs', JobController::class)
    ->only(['index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
