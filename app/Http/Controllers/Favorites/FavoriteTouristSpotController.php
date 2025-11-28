<?php

namespace App\Http\Controllers\Favorites;

use App\Http\Controllers\Controller;
use App\Services\Favorites\FavoriteTouristSpotService;
use App\Http\Requests\CreateFavoriteTouristSpotRequest;
use App\Http\Resources\Favorites\FavoriteTouristSpotResource;

class FavoriteTouristSpotController extends Controller
{
    protected $favoriteService;

    public function __construct(FavoriteTouristSpotService $favoriteService)
    {
        $this->favoriteService = $favoriteService;
    }

    public function index()
    {
        $favorites = $this->favoriteService->index();

        return FavoriteTouristSpotResource::collection($favorites);
    }

    public function show($id)
    {
        $this->favoriteService->show($id);
    }

    public function store(CreateFavoriteTouristSpotRequest $request)
    {
        $validated = $request->validated();

        $favorite = $this->favoriteService->create($validated);

        return new FavoriteTouristSpotResource($favorite);
    }

    public function destroy($id)
    {
        $this->favoriteService->delete($id);

        return response()->json(null, 204);
    }

}