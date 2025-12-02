<?php

namespace App\Services\Photos;

use App\Models\Photos\PhotoTouristSpot;

class PhotoTouristSpotService
{

    public function show($id)
    {
        return PhotoTouristSpot::findOrFail($id);
    }

    public function index($touristSpotId)
    {
        return PhotoTouristSpot::where('tourist_spot_id', $touristSpotId)->get();
    }

    public function verifyImage(array $data)
    {
        if(request()->hasFile('image')) {
            $imagePath = request()->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }
        return $data;
    }

    public function create(array $data)
    {
        $data = $this->verifyImage($data);
    
        return PhotoTouristSpot::create($data);
    }

    public function delete($id): void
    {
        $photo = PhotoTouristSpot::findOrFail($id);
        $photo->delete();
    }
}
