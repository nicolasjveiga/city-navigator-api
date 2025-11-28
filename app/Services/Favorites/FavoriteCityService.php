<?php

namespace App\Services\Favorites;

use App\Models\Favorites\FavoriteCity;
use Illuminate\Support\Facades\Auth;

class FavoriteCityService
{
    public function show ($id)
    {
        return FavoriteCity::findOrFail($id);
    }

    public function index()
    {
        return FavoriteCity::where('user_id', Auth::id())->get();
    }

    public function create(array $data)
    {
        return FavoriteCity::FirstOrcreate(['user_id' => Auth::id()] + $data);
    }

    public function delete($id)
    {
        return FavoriteCity::where('id', $id)->delete();
    }
}