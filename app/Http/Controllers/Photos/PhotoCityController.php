<?php

namespace App\Http\Controllers\Photos;

use App\Http\Controllers\Controller;
use App\Services\Photos\PhotoCityService;
use App\Models\Photos\PhotoCity;
use App\Http\Resources\Photos\PhotoCityResource;
use App\Http\Requests\Photos\CreatePhotoCityRequest;

class PhotoCityController extends Controller
{
    protected $photoService;

    public function __construct(PhotoCityService $photoCityService)
    {
        $this->photoService = $photoCityService;
    }

    public function show($id)
    {
        $photo = $this->photoService->show($id);
        
        return new PhotoCityResource($photo);
    }

    public function index($cityId)
    {
        $photos = $this->photoService->index($cityId);

        return PhotoCityResource::collection($photos);
    }


    public function store(CreatePhotoCityRequest $request)
    {
        $validated = $request->validated();

        $photo = $this->photoService->create($validated);
        
        return new PhotoCityResource($photo);
    }

    public function destroy($id)
    {
        $this->photoService->delete($id);

        return response()->json(null, 204);
    }
}
