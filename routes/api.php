<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/login', [LoginController::class, 'login'])->middleware('check.program_id');
        Route::post('/register', [RegisterController::class, 'register']);
        Route::post('/refresh-token', [LoginController::class, 'refresh']);
        Route::get('/me', [LoginController::class, 'me'])->middleware('jwt.auth');
        Route::post('/logout', [LoginController::class, 'logout'])->middleware('jwt.auth');
    });
});