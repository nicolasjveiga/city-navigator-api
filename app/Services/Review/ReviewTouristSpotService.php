<?php

namespace App\Services\Review;

use App\Models\Review\ReviewTouristSpot;
use Illuminate\Support\Facades\Auth;
use App\Services\Review\ReviewStatusService;

class ReviewTouristSpotService
{
    protected ReviewStatusService $reviewStatusService;

    public function __construct(ReviewStatusService $reviewStatusService)
    {
        $this->reviewStatusService = $reviewStatusService;
    }

    public function show($id)
    {
        return ReviewTouristSpot::findOrFail($id);
    }

    public function index($touristSpotId)
    {
        return ReviewTouristSpot::where('tourist_spot_id', $touristSpotId)->get();
    }

    public function create(array $data)
    {
        $review = ReviewTouristSpot::create([
            'user_id'          => Auth::id(),
            'tourist_spot_id'  => $data['tourist_spot_id'],
            'comment'          => $data['comment'],
            'rating'           => $data['rating'],
        ]);
        $this->reviewStatusService->updateTouristSpotAverage($data['tourist_spot_id']);

        return $review;
    }

    public function update($id, array $data)
    {
        $review = ReviewTouristSpot::findOrFail($id);

        $review->update($data);

        $this->reviewStatusService->updateTouristSpotAverage($data['tourist_spot_id']);

        return $review;
    }

    public function delete($id)
    {
        ReviewTouristSpot::destroy($id);
    }
}