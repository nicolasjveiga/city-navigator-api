<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    protected $fillable = [
        'city_id',
        'name',
        'description',
        'image_url',
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
        return $this->hasMany(Review::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'spot_categories');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function visitedBy()
    {
        return $this->hasMany(VisitedSpot::class);
    }
}
