<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Services\PhotoService;
use App\Http\Resources\PhotoResource;
use App\Http\Requests\CreatePhotoRequest;

class PhotoController extends Controller
{
    protected $photoService;

    public function __construct(PhotoService $photoService)
    {
        $this->photoService = $photoService;
    }

    public function cityPhotos($cityId)
    {
        $photos = $this->photoService->getPhotosByCity($cityId);

        return PhotoResource::collection($photos);
    }

    public function touristSpotPhotos($touristSpotId)
    {
        $photos = $this->photoService->getPhotosByTouristSpot($touristSpotId);

        return PhotoResource::collection($photos);
    }

    public function index()
    {
        //TODO: Logic to show all photos
    }

    public function show($id)
    {
        //TODO: Logic to show a specific photo
    }

    public function store(CreatePhotoRequest $request)
    {
        $validated = $request->validated();

        $photo = $this->photoService->create($validated);
        
        return new PhotoResource($photo);
    }

    public function update(Request $request)
    {
        //TODO: Logic to update a specific photo
    }

    public function destroy($id)
    {
        $this->photoService->delete($id);

        return response()->json(null, 204);
    }
}
