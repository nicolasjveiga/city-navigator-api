<?php

namespace App\Services;

use App\Models\TouristSpot;

class TouristSpotService
{
    public function index()
    {
        return TouristSpot::all();
    }

    public function show($id)
    {
        return TouristSpot::findOrFail($id);
    }

    public function create(array $data)
    {
        $spot = TouristSpot::create($data); 

        $spot->categories()->sync($data['categories']);

        return $spot;
    }
}