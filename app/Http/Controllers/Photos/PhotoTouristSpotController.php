<?php

namespace App\Http\Controllers\Photos;

use App\Http\Controllers\Controller;
use App\Services\Photos\PhotoTouristSpotService;
use App\Http\Resources\Photos\PhotoTouristSpotResource;
use App\Http\Requests\Photos\CreatePhotoTouristSpotRequest;

class PhotoTouristSpotController extends Controller
{
    protected $photoService;

    public function __construct(PhotoTouristSpotService $photoTouristSpotService)
    {
        $this->photoService = $photoTouristSpotService;
    }

    public function show($id)
    {
        $photo = $this->photoService->show($id);
        
        return new PhotoTouristSpotResource($photo);
    }

    public function index($touristSpotId)
    {
        $photos = $this->photoService->index($touristSpotId);

        return PhotoTouristSpotResource::collection($photos);
    }

    public function store(CreatePhotoTouristSpotRequest $request)
    {
        $validated = $request->validated();

        $photo = $this->photoService->create($validated);
        
        return new PhotoTouristSpotResource($photo);
    }

    public function destroy($id)
    {
        $this->photoService->delete($id);

        return response()->json(null, 204);
    }
}
