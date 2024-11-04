<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/apartments', [PagesController::class, 'listings'])->name('apartments');
Route::get('/apartments/{index}', [PagesController::class, 'single'])->name('apartment');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/contact-mail', function () {
    $data = [
        'name' => 'Charles Loto',
        'subject' => 'Testing Subject',
        'message' => "This <br/> makes a lot of sense, <br /> thank you",
        'phone' => "09161682243",
        'email' => 'sage@mail.com'
    ];

    return new App\Mail\Contact($data);
});

/** Post Requests */
Route::post('/subscribe', [PagesController::class, 'subscribe'])->name('subscribe');
Route::post('/contact', [PagesController::class, 'send'])->name('send');
