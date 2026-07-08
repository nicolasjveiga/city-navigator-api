<?php

namespace App\Services\Review;

use App\Models\City;
use App\Models\TouristSpot;
use App\Models\Review\ReviewCity;
use App\Models\Review\ReviewTouristSpot;

class ReviewStatusService
{
    public function updateTouristSpotAverage($touristSpotId)
    {
        $average = ReviewTouristSpot::where('tourist_spot_id', $touristSpotId)
                ->avg('rating');
        
        $count = ReviewTouristSpot::where('tourist_spot_id', $touristSpotId)
                ->count();

        TouristSpot::where('id', $touristSpotId)
            ->update([
                'average_rating' => $average,
                'review_count' => $count
            ]);
    }

    public function updateCityStatus($cityId)
    {
        $average = ReviewCity::where('city_id', $cityId)
                ->avg('rating');

        $count = ReviewCity::where('city_id', $cityId)
                ->count();

        City::where('id', $cityId)
            ->update([
                'average_rating' => $average,
                'review_count' => $count
            ]);
    }
}
