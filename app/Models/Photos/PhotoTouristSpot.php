<?php

namespace App\Models\Photos;

use App\Models\TouristSpot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoTouristSpot extends Model
{
    use SoftDeletes;

    protected $table = 'photos_tourist_spots';

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
