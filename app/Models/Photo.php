<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'image',
        'caption',
        'city_id',
        'tourist_spot_id',
    ];

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }
}

