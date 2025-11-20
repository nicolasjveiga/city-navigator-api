<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReviewService;
use App\Http\Resources\ReviewResource;
use App\Http\Requests\CreateReviewRequest;

class ReviewController extends Controller
{
    protected $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    public function touristSpotReviews($touristSpotId)
    {
        $reviews = $this->reviewService->getReviewsByTouristSpot($touristSpotId);

        return ReviewResource::collection($reviews);
    }

    public function cityReviews($cityId)
    {
        $reviews = $this->reviewService->getReviewsByCity($cityId);

        return new ReviewResource($reviews);
    }

    public function store(CreateReviewRequest $request)
    {
        $validated = $request->validated();

        $review = $this->reviewService->create($validated);

        return new ReviewResource($review);
    }

    public function update(Request $request, $id)
    {
        // TODO: Logic to update a specific review
    }

    public function destroy($id)
    {
        // TODO: Logic to delete a specific review
    }
}