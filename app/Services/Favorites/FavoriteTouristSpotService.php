<?php

namespace App\Services\Favorites;

use Illuminate\Support\Facades\Auth;
use App\Models\Favorites\FavoriteTouristSpot;

class FavoriteTouristSpotService
{
    public function show ($id)
    {
        return FavoriteTouristSpot::findOrFail($id);
    }

    public function index()
    {
        return FavoriteTouristSpot::where('user_id', Auth::id())->get();
    }

    public function create(array $data)
    {
        return FavoriteTouristSpot::FirstOrcreate(['user_id' => Auth::id()] + $data);
    }

    public function delete($id)
    {
        return FavoriteTouristSpot::where('id', $id)->delete();
    }
}