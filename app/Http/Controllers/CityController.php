<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CityService;
use App\Http\Resources\CityResource;
use App\Http\Requests\CreateCityRequest;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index()
    {
        $cities = $this->cityService->index();

        return CityResource::collection($cities);
    }
    
    public function show($id)
    {
        $city = $this->cityService->show($id);

        return new CityResource($city);
    }

    public function store(CreateCityRequest $request)
    {
        $validated = $request->validated();

        $city = $this->cityService->create($validated);

        return new CityResource($city);
    }
    public function update(Request $request, $id)
    {
        // TODO: Logic to update a specific city
    }
    public function destroy($id)
    {
        // TODO: Logic to delete a specific city
    }
}
