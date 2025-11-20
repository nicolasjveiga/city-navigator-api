<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function touristSpots()
    {
        return $this->belongsToMany(TouristSpot::class, 'spot_categories');
    }
}
