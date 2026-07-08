<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TouristSpotController;
use App\Http\Controllers\Photos\PhotoCityController;
use App\Http\Controllers\Review\ReviewCityController;
use App\Http\Controllers\Favorites\FavoriteCityController;
use App\Http\Controllers\Photos\PhotoTouristSpotController;
use App\Http\Controllers\Review\ReviewTouristSpotController;
use App\Http\Controllers\Favorites\FavoriteTouristSpotController;

// reviews likes
// visisted_spots
// city highlights

Route::post ('/register', [AuthController::class, 'register']);
Route::post ('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    
});

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get  ('/my-profile', [AuthController::class, 'show']);

    // Reviews -- CITIES
    Route::post ('/reviews/city',      [ReviewCityController::class, 'store']);
    Route::get  ('/city/{id}/reviews', [ReviewCityController::class, 'index']);

    // Reviews -- TOURIST SPOTS
    Route::post ('/reviews/tourist-spot',     [ReviewTouristSpotController::class, 'store']);
    Route::get  ('/tourist-spot/{id}/reviews', [ReviewTouristSpotController::class, 'index']);

    // Favorites — CITIES
    Route::post   ('/favorites/cities',            [FavoriteCityController::class, 'store']);
    Route::get    ('/favorites/cities',            [FavoriteCityController::class, 'index']);
    Route::delete ('/favorites/cities/{id}',       [FavoriteCityController::class, 'destroy']);

    // Favorites — TOURIST SPOTS
    Route::post   ('/favorites/tourist-spots',     [FavoriteTouristSpotController::class, 'store']);
    Route::get    ('/favorites/tourist-spots',     [FavoriteTouristSpotController::class, 'index']);
    Route::delete ('/favorites/tourist-spots/{id}',[FavoriteTouristSpotController::class, 'destroy']);

});

Route::post ('/city',      [CityController::class, 'store']);
Route::get  ('/cities',    [CityController::class, 'index']);
Route::get  ('/city/{id}', [CityController::class, 'show']);
//Route::put  ('/city/{id}', [CityController::class, 'update']);
//Route::delete  ('/city/{id}', [CityController::class, 'destroy']);

Route::post ('/tourist-spot',      [TouristSpotController::class, 'store']);
Route::get  ('/tourist-spots',     [TouristSpotController::class, 'index']);
Route::get  ('/tourist-spot/{id}', [TouristSpotController::class, 'show']);
//Route::put  ('/tourist-spot/{id}', [TouristSpotController::class, 'update']);
//Route::delete  ('/tourist-spot/{id}', [TouristSpotController::class, 'destroy']);

Route::post   ('/tourist-spots/{id}/photos', [PhotoTouristSpotController::class, 'store']);
Route::get    ('/tourist-spots/{id}/photos', [PhotoTouristSpotController::class, 'index']);
Route::get    ('/tourist-spot-photos/{id}',  [PhotoTouristSpotController::class, 'show']);
Route::delete ('/tourist-spot-photos/{id}',  [PhotoTouristSpotController::class, 'destroy']);

Route::post   ('/cities/{id}/photos', [PhotoCityController::class, 'store']);
Route::get    ('/cities/{id}/photos', [PhotoCityController::class, 'index']);
Route::delete ('/city-photos/{id}',   [PhotoCityController::class, 'destroy']);
Route::get    ('/city-photos/{id}',   [PhotoCityController::class, 'show']);


Route::post ('/category',      [CategoryController::class, 'store']);
Route::get  ('/categories',    [CategoryController::class, 'index']);
Route::get  ('/category/{id}', [CategoryController::class, 'show']);
//Route::put  ('/category/{id}', [CategoryController::class, 'update']);
//Route::delete  ('/category/{id}', [CategoryController::class, 'destroy']);

