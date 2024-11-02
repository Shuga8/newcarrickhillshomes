<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/apartments', [PagesController::class, 'listings'])->name('apartments');
Route::get('/apartment/{index}', [PagesController::class, 'single'])->name('apartment');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

/** Post Requests */
Route::post('/subscribe', [PagesController::class, 'subscribe'])->name('subscribe');
Route::post('/contact', [PagesController::class, 'send'])->name('send');
