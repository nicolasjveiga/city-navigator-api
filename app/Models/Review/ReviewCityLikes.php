<?php

namespace App\Models\Review;

use App\Models\User;
use App\Models\Review\ReviewCity;
use Illuminate\Database\Eloquent\Model;

class ReviewCityLike extends Model
{
    protected $table = 'review_city_likes';

    protected $fillable = [
        'review_city_id',
        'user_id'
    ];

    public function review()
    {
        return $this->belongsTo(ReviewCity::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
