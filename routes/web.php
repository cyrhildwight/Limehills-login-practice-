<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin']);

    Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'getLogout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});





































// Route::get('/', [chaitherController::class, 'index'])->name('home');
    // Route::get('/home', [chaitherController::class, 'index']);
    // Route::get('/dashboard', [chaitherController::class, 'index'])->name('dashboard');