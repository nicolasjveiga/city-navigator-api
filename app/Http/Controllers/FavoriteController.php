<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FavoriteService;
use App\Http\Resources\FavoriteResource;
use App\Http\Requests\CreateFavoriteRequest;

class FavoriteController extends Controller
{
    protected $favoriteService;

    public function __construct(FavoriteService $favoriteService)
    {
        $this->favoriteService = $favoriteService;
    }

    public function index()
    {
        $favorites = $this->favoriteService->getFavorites();

        return FavoriteResource::collection($favorites);
    }

    public function store(CreateFavoriteRequest $request)
    {
        $validated = $request->validated();

        $favorite = $this->favoriteService->create($validated);

        return new FavoriteResource($favorite);
    }

    public function destroy($id)
    {
        $this->favoriteService->delete($id);

        return response()->json(null, 204);
    }

}