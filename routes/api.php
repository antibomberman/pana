<?php

use App\Http\Controllers\Base\CategoryController;
use App\Http\Controllers\Base\CityController;
use App\Http\Controllers\Base\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('category', [CategoryController::class, 'index']);
Route::get('country', [CountryController::class, 'index']);
Route::get('city', [CityController::class, 'index']);
