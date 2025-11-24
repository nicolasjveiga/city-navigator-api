<?php

namespace App\Http\Controllers\Review;

use App\Http\Resources\Review\ReviewTouristSpotResource;
use App\Services\ReviewService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Services\Review\ReviewTouristSpotService;
use App\Http\Requests\CreateReviewTouristSpotRequest;
use App\Http\Requests\UpdateReviewTouristSpotRequest;

class ReviewTouristSpotController extends Controller
{
    protected $reviewService;

    public function __construct(ReviewTouristSpotService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    public function show($id)
    {
        $review = $this->reviewService->show($id);

        return new ReviewTouristSpotResource($review);
    }

    public function index($touristSpotId)
    {
        $reviews = $this->reviewService->index($touristSpotId);

        return ReviewTouristSpotResource::collection($reviews);
    }

    public function store(CreateReviewTouristSpotRequest $request)
    {
        $validated = $request->validated();

        $review = $this->reviewService->create($validated);

        return new ReviewTouristSpotResource($review);
    }

    public function update(UpdateReviewTouristSpotRequest $request, $id)
    {
        $validated = $request->validated();

        $review = $this->reviewService->update($id, $validated);

        return new ReviewTouristSpotResource($review);
    }

    public function destroy($id)
    {
        $this->reviewService->delete($id);

        return response()->json(null, 204);
    }
}