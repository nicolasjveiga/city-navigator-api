<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use App\Services\Review\ReviewCityService;
use App\Http\Requests\Review\CreateReviewCityRequest;
use App\Http\Requests\Review\UpdateReviewCityRequest;
use App\Http\Resources\Review\ReviewCityResource;

class ReviewCityController extends Controller
{
    protected $reviewCityService;

    public function __construct(ReviewCityService $reviewCityService)
    {
        $this->reviewCityService = $reviewCityService;
    }

    public function index($cityId)
    {
        $reviews = $this->reviewCityService->index($cityId);

        return ReviewCityResource::collection($reviews);
    }

    public function show($id): ReviewCityResource
    {
        $review = $this->reviewCityService->show($id);

        return new ReviewCityResource($review);
    }

    public function store(CreateReviewCityRequest $request): ReviewCityResource
    {
        $validated = $request->validated();

        $review = $this->reviewCityService->create($validated);

        return new ReviewCityResource($review);
    }

    public function update(UpdateReviewCityRequest $request, $id): ReviewCityResource
    {
        $validated = $request->validated();
        
        $review = $this->reviewCityService->update($id, $validated);

        return new ReviewCityResource($review);
    }

    public function destroy($id)
    {
        $this->reviewCityService->delete($id);

        return response()->json(null, 204);
    }
}