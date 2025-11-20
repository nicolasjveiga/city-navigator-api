<?php

namespace App\Services;

use App\Models\Review;
use App\Models\TouristSpot;
use App\Models\City;

class ReviewRatingService
{
    public function updateTouristSpotAverage($touristSpotId)
    {
        $average = Review::where('tourist_spot_id', $touristSpotId)
                ->avg('rating');

        TouristSpot::where('id', $touristSpotId)
            ->update(['average_rating' => $average]);
    }

    public function updateCityAverage($cityId)
    {
        $average = Review::where('city_id', $cityId)
                ->avg('rating');

        City::where('id', $cityId)
            ->update(['average_rating' => $average]);
    }
}
