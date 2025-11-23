<?php 

namespace App\Services;

use App\Models\City;
use Illuminate\Http\Request;

class CityService
{
    public function index(Request $request)
    {
        $search = $request->header('Search');

        $query = City::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                ->orWhere('country', 'LIKE', "%{$search}%");
            });
        }

        return $query->get();
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