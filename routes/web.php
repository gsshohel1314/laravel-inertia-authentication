<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::resource('customers', CustomerController::class);

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

require __DIR__.'/auth.php';
