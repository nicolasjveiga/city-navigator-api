<?php

namespace App\Services;


use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewService
{
    protected ReviewRatingService $reviewRatingService;

    public function __construct(ReviewRatingService $reviewRatingService)
    {
        $this->reviewRatingService = $reviewRatingService;
    }

    public function index($touristSpotId)
    {
        return Review::where('tourist_spot_id', $touristSpotId)->get();
    }

    public function getReviewsByCity($cityId)
    {
        return Review::where('city_id', $cityId)->get();
    }

    public function create(array $data): Review
    {
        $user = Auth::user();

        $touristSpotId = data_get($data, 'tourist_spot_id', null);
        $cityId = data_get($data, 'city_id', null);

        $review = Review::create([
            'user_id'          => $user->id,
            'city_id'         =>  $cityId,
            'tourist_spot_id'  => $touristSpotId,
            'comment'          => $data['comment'],
            'rating'           => $data['rating'],
        ]);

        if($touristSpotId) {
            $this->reviewRatingService->updateTouristSpotAverage($touristSpotId);
        }

        if($cityId) {
            $this->reviewRatingService->updateCityAverage($cityId);
        }

        return $review;
    }
}