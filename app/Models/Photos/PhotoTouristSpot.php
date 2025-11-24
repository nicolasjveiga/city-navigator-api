<?php

namespace App\Models\Photos;

use App\Models\TouristSpot;
use Illuminate\Database\Eloquent\Model;

class PhotoTouristSpot extends Model
{
    protected $fillable = [
        'image',
        'caption',
        'tourist_spot_id',
    ];

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }
}
