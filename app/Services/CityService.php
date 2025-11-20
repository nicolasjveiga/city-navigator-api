<?php 

namespace App\Services;

use App\Models\City;

class CityService
{
    public function index()
    {
        return City::all();
    }
    public function show($id)
    {
        return City::findOrFail($id);
    }
    
    public function create(array $data)
    {
        return City::create($data);
    }
}   