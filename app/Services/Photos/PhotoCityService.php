<?php

namespace App\Services\Photos;

use App\Models\Photos\PhotoCity;

class PhotoCityService
{

    public function show($id)
    {
        return PhotoCity::findOrFail($id);
    }

    public function index($cityId)
    {
        return PhotoCity::where('city_id', $cityId)->get();
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
    
        return PhotoCity::create($data);
    }

    public function delete($id): void
    {
        $photo = PhotoCity::findOrFail($id);
        $photo->delete();
    }
}
