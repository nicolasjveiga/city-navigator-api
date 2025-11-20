<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'tourist_spot_id',
        'city_id',
        'image_url',
        'caption'
    ];

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }
}
