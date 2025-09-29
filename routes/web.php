<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('guest')->group(function () {
    Route::get('/test', function () {
        return Inertia::render('Test');
    })->name('test'); 
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
