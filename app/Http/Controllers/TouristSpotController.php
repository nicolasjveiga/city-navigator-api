<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TouristSpotService;
use App\Http\Resources\TouristSpotResource;
use App\Http\Requests\CreateTouristSpotRequest;

class TouristSpotController extends Controller
{
    protected $touristSpotService;

    public function __construct(TouristSpotService $touristSpotService)
    {
        $this->touristSpotService = $touristSpotService;
    }

    public function index()
    {
        $touristSpots = $this->touristSpotService->index();

        return TouristSpotResource::collection($touristSpots);
    }

    public function show($id)
    {
        $touristSpot = $this->touristSpotService->show($id);

        return new TouristSpotResource($touristSpot);
    }

    public function store(CreateTouristSpotRequest $request)
    {
        $validated = $request->validated();

        $touristSpot = $this->touristSpotService->create($validated);

        return new TouristSpotResource($touristSpot);
    }
    public function update(Request $request, $id)
    {
        // TODO: Logic to update a specific city
    }
    public function destroy($id)
    {
        // TODO: Logic to delete a specific city
    }
}
