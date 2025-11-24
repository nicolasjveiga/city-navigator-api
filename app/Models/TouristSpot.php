<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review\ReviewTouristSpot;
use App\Models\Favorites\FavoriteTouristSpot;

class TouristSpot extends Model
{
    protected $fillable = [
        'city_id',
        'name',
        'description',
        'average_rating',
        'review_count',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function reviews()
    {
        return $this->hasMany(ReviewTouristSpot::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'spot_categories');
    }

    public function favorites()
    {
        return $this->hasMany(FavoriteTouristSpot::class);
    }

    public function visitedBy()
    {
        return $this->hasMany(VisitedSpot::class);
    }
}
