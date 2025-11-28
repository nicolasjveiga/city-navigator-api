<?php

namespace App\Models\Favorites;

use App\Models\User;
use App\Models\TouristSpot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoriteTouristSpot extends Model
{
    use SoftDeletes;

    protected $table = 'favorites_tourist_spots';

    protected $fillable = [
        'user_id',
        'tourist_spot_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }

}

