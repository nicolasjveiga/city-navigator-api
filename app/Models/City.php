<?php

namespace App\Models;

use App\Models\Favorites\FavoriteCity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'description',
        'average_rating',
        'review_count',
    ];

    public function touristSpots()
    {
        return $this->hasMany(TouristSpot::class);
    }

    public function favorites()
    {
        return $this->hasMany(FavoriteCity::class);
    }

    public function highlights()
    {
        return $this->hasMany(CityHighlight::class);
    }
}
