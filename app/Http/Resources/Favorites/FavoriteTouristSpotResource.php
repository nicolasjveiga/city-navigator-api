<?php

namespace App\Http\Resources\Favorites;

use App\Http\Resources\TouristSpotResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteTouristSpotResource extends JsonResource
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tourist_spot' => new TouristSpotResource($this->touristSpot),
        ];
    }

}