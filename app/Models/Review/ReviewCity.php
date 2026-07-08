<?php

namespace App\Models\Review;

use App\Models\User;
use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class ReviewCity extends Model
{
    protected $table = 'reviews_cities';

    protected $fillable = [
        'user_id',
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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function likes()
    {
        return $this->hasMany(ReviewCityLike::class);
    }
}
