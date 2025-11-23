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


    public function verifyImage(array $data)
    {
        if(request()->hasFile('image')) {
            $imagePath = request()->file('image')->store('products', 'public'); //tem que mudar esse nome de caminho depois
            $data['image'] = $imagePath;
        }
        return $data;
    }

    public function create(array $data): Photo
    {
        $data = $this->verifyImage($data);
    
        return Photo::create($data);
    }

    public function delete($id): void
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();
    }
}
