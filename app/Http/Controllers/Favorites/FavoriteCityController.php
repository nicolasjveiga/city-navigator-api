<?php

namespace App\Http\Controllers\Favorites;

use App\Http\Controllers\Controller;
use App\Services\Favorites\FavoriteCityService;
use App\Http\Requests\CreateFavoriteCityRequest;
use App\Http\Resources\Favorites\FavoriteCityResource;

class FavoriteCityController extends Controller
{
    protected $favoriteService;

    public function __construct(FavoriteCityService $favoriteService)
    {
        $this->favoriteService = $favoriteService;
    }

    public function index()
    {
        $favorites = $this->favoriteService->index();

        return FavoriteCityResource::collection($favorites);
    }

    public function show($id)
    {
        $favorite = $this->favoriteService->show($id);
        
        return new FavoriteCityResource($favorite);
    }

    public function store(CreateFavoriteCityRequest $request)
    {
        $validated = $request->validated();

        $favorite = $this->favoriteService->create($validated);

        return new FavoriteCityResource($favorite);
    }

    public function destroy($id)
    {
        $this->favoriteService->delete($id);

        return response()->json(null, 204);
    }

}