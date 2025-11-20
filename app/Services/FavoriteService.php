<?php

namespace App\Services;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteService
{
    public function getFavorites()
    {
        $user = Auth::user();

        return Favorite::where('user_id', $user->id)->get();
    }

    public function create(array $data)
    {
        $user = Auth::user();

        return Favorite::create([
            'user_id' => $user->id,
            'tourist_spot_id' => $data['tourist_spot_id'] ?? null,
            'city_id' => $data['city_id'] ?? null,
        ]);
    }

    public function delete($id)
    {
        return Favorite::where('id', $id)->delete();
    }
}