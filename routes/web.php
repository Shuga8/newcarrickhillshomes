<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('apartments', [PagesController::class, 'listings'])->name('apartments');

/** Post Requests */
Route::post('/subscribe', [PagesController::class, 'subscribe'])->name('subscribe');
