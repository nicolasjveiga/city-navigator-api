<?php

namespace App\Http\Resources\Favorites;

use App\Http\Resources\CityResource;
use Illuminate\Http\Resources\Json\JsonResource;


class FavoriteCityResource extends JsonResource
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'city' => new CityResource($this->city),
        ];
    }

}