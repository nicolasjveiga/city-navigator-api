<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\TouristSpotController;

// reviews likes
// favorites
// visisted_spots
// city highlights

Route::post ('/register', [AuthController::class, 'register']);
Route::post ('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    
});

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post ('/review', [ReviewController::class, 'store']);
    Route::get  ('/city/{id}/reviews', [ReviewController::class, 'cityReviews']);
    Route::get  ('/tourist-spot/{id}/reviews', [ReviewController::class, 'touristSpotReviews']);

    Route::post ('/favorite', [FavoriteController::class, 'store']);
    Route::get  ('/favorites', [FavoriteController::class, 'index']);
    Route::delete('/favorite/{id}', [FavoriteController::class, 'destroy']);
});

Route::post ('/city', [CityController::class, 'store']);
Route::get  ('/cities', [CityController::class, 'index']);
Route::get  ('/city/{id}', [CityController::class, 'show']);
//Route::put  ('/city/{id}', [CityController::class, 'update']);
//Route::delete  ('/city/{id}', [CityController::class, 'destroy']);

Route::post ('/tourist-spot', [TouristSpotController::class, 'store']);
Route::get  ('/tourist-spots', [TouristSpotController::class, 'index']);
Route::get  ('/tourist-spot/{id}', [TouristSpotController::class, 'show']);
//Route::put  ('/tourist-spot/{id}', [TouristSpotController::class, 'update']);
//Route::delete  ('/tourist-spot/{id}', [TouristSpotController::class, 'destroy']);

Route::post ('/photos', [PhotoController::class, 'store']);
Route::get  ('/tourist-spot/{id}/photos', [PhotoController::class, 'touristSpotPhotos']);
Route::get  ('/city/{id}/photos', [PhotoController::class, 'cityPhotos']);

Route::post ('/category', [CategoryController::class, 'store']);
Route::get  ('/categories', [CategoryController::class, 'index']);
Route::get  ('/category/{id}', [CategoryController::class, 'show']);
//Route::put  ('/category/{id}', [CategoryController::class, 'update']);
//Route::delete  ('/category/{id}', [CategoryController::class, 'destroy']);

