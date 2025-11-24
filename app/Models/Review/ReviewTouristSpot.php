<?php

namespace App\Models\Review;

use App\Models\User;
use App\Models\TouristSpot;
use Illuminate\Database\Eloquent\Model;

class ReviewTouristSpot extends Model
{
    protected $table = 'reviews_tourist_spots';

    protected $fillable = [
        'user_id',
        'tourist_spot_id',
        'comment',
        'rating'
    ];

    protected $casts = [
        'rating' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }

    public function likes()
    {
        return $this->hasMany(ReviewTouristSpotLike::class);
    }
}
