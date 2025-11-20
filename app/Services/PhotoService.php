<?php

namespace App\Services;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoService
{

    public function getPhotosByCity($cityId)
    {
        return Photo::where('city_id', $cityId)->get();
    }

    public function getPhotosByTouristSpot($touristSpotId)
    {
        return Photo::where('tourist_spot_id', $touristSpotId)->get();
    }

    public function create(Request $data): Photo
    {
        $path = $data->file('photo')->store('photos', 'public');

        return Photo::create([
            'image_url'       => $path,
            'caption'         => $data->input('caption'),
            'city_id'         => $data->input('city_id'),
            'tourist_spot_id' => $data->input('tourist_spot_id'),
        ]);
    }
}
