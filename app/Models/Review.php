<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'tourist_spot_id',
        'city_id',
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
        return $this->hasMany(ReviewLike::class);
    }
}
