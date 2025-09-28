<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.store');

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.store');

    // Route::get('forgot-password', [AuthController::class, 'create'])
    //     ->name('password.request');

    // Route::post('forgot-password', [AuthController::class, 'store'])
    //     ->name('password.email');

    // Route::get('reset-password/{token}', [AuthController::class, 'create'])
    //     ->name('password.reset');

    // Route::post('reset-password', [AuthController::class, 'store'])
    //     ->name('password.store');
});

Route::middleware('auth')->group(function () {
    // Route::get('verify-email', AuthController::class)
    //     ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', AuthController::class)
    //     ->middleware(['signed', 'throttle:6,1'])
    //     ->name('verification.verify');

    // Route::post('email/verification-notification', [AuthController::class, 'store'])
    //     ->middleware('throttle:6,1')
    //     ->name('verification.send');

    // Route::post('logout', [AuthController::class, 'destroy'])
    //     ->name('logout');
});
