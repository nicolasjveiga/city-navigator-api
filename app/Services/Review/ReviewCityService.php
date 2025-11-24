<?php

namespace App\Services\Review;

use App\Models\Review\ReviewCity;
use Illuminate\Support\Facades\Auth;
use App\Services\Review\ReviewStatusService;

class ReviewCityService
{
    protected ReviewStatusService $reviewStatusService;

    public function __construct(ReviewStatusService $reviewStatusService)
    {
        $this->reviewStatusService = $reviewStatusService;
    }

    public function show($id): ReviewCity
    {
        return ReviewCity::findOrFail($id);
    }

    public function index($cityId)
    {
        return ReviewCity::where('city_id', $cityId)->get();
    }

    public function create(array $data): ReviewCity
    {
        $review = ReviewCity::create([
            'user_id' => Auth::id(),
            'city_id' =>  $data['city_id'],
            'comment' => $data['comment'],
            'rating'  => $data['rating'],
        ]);

        $this->reviewStatusService->updateCityStatus($data['city_id']);
        
        return $review;
    }

    public function update($id, array $data): ReviewCity
    {
        $review = ReviewCity::findOrFail($id);

        $review->update($data);

        $this->reviewStatusService->updateCityStatus($id);

        return $review;
    }

    public function delete($id): void
    {
        ReviewCity::destroy($id);
    }
}