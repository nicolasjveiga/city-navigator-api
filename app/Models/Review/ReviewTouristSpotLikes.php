<?php

namespace App\Models\Review;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review\ReviewTouristSpot;

class ReviewTouristSpotLike extends Model
{
    protected $table = 'review_tourist_spot_likes';

    protected $fillable = [
        'review_tourist_spot_id',
        'user_id'
    ];

    public function review()
    {
        return $this->belongsTo(ReviewTouristSpot::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
