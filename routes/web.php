<?php

use App\Http\Controllers\PagesController;
use App\Mail\ThankYou;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/apartments', [PagesController::class, 'listings'])->name('apartments');
Route::get('/apartments/{index}', [PagesController::class, 'single'])->name('apartment');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/render', function () {
    $email = 'lotocharles8@mail.com';

    return new App\Mail\Subscriber($email);
});
Route::get('/thank-you', function () {
    $data = [
        'name' => 'Charles',
        'subject' => 'Testing this'
    ];

    return new ThankYou($data);
});

/** Post Requests */
Route::post('/subscribe', [PagesController::class, 'subscribe'])->name('subscribe');
Route::post('/contact', [PagesController::class, 'send'])->name('send');
