<?php

use App\Http\Controllers\CompanyProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyProfileController::class, 'home'])
    ->name('home');

Route::get('/about', [CompanyProfileController::class, 'about'])
    ->name('about');

Route::get('/services', [CompanyProfileController::class, 'services'])
    ->name('services');

Route::get('/contact', [CompanyProfileController::class, 'contact'])
    ->name('contact');

Route::post('/contact', [CompanyProfileController::class, 'sendContact'])
    ->name('contact.send');

Route::get('/test-gambar', function () {
    $path = public_path('images/test.jpg');

    return response()->file($path);
});
