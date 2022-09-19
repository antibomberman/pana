<?php

use App\Http\Controllers\Mobile\AuthController;
use App\Http\Controllers\Mobile\FavoriteController;
use App\Http\Controllers\Mobile\HousingController;
use App\Http\Controllers\Mobile\PasswordResetController;
use App\Http\Controllers\Mobile\ReviewController;
use App\Http\Controllers\Mobile\RoomController;
use App\Http\Controllers\Mobile\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('register/verify', [AuthController::class, 'registerVerify']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::prefix('password-reset')->group(function () {
    Route::post('init', [PasswordResetController::class, 'init']);
    Route::post('verify', [PasswordResetController::class, 'verify']);
    Route::post('update', [PasswordResetController::class, 'update']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('profile', [UserController::class, 'profile']);
        Route::post('update', [UserController::class, 'update']);
    });

    Route::prefix('housing')->group(function () {
        Route::get('/', [HousingController::class, 'index']);
        Route::get('/show/{housing}', [HousingController::class, 'show']);
    });

    Route::prefix('room')->group(function () {
        Route::get('/', [RoomController::class, 'index']);
    });
    Route::prefix('favorite')->group(function () {
        Route::get('/', [FavoriteController::class, 'index']);
        Route::post('/', [FavoriteController::class, 'store']);
        Route::delete('/{housing}', [FavoriteController::class, 'delete']);
    });
    Route::prefix('review')->group(function () {
        Route::get('/', [ReviewController::class, 'index']);
        Route::post('/', [ReviewController::class, 'store']);
    });
});
