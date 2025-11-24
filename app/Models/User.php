<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Models\Review\ReviewCity;
use App\Models\Favorites\FavoriteCity;
use App\Models\Review\ReviewTouristSpot;
use Illuminate\Notifications\Notifiable;
use App\Models\Favorites\FavoriteTouristSpot;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function favoritesTouristSpot()
    {
        return $this->hasMany(FavoriteTouristSpot::class);
    }

    public function favoriteCity(){
        return $this->hasMany(FavoriteCity::class);
    }

    public function visitedSpots()
    {
        return $this->hasMany(VisitedSpot::class);
    }

    public function reviewsCity()
    {
        return $this->hasMany(ReviewCity::class);
    }
    public function reviewsTouristSpot()
    {
        return $this->hasMany(ReviewTouristSpot::class);
    }
}