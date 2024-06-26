<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/guests', [GuestController::class, 'store'])->name('guests.store');
