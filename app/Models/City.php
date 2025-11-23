<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'country',
        'description',
        'image_url',
        'average_rating'
        // TODO: Adicionar um campo de reviews_count
    ];

    public function touristSpots()
    {
        return $this->hasMany(TouristSpot::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function highlights()
    {
        return $this->hasMany(CityHighlight::class);
    }
}
