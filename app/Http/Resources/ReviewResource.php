<?php 

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_name' => $this->user?->name,
            'tourist_spot_id' => $this->tourist_spot_id,
            'city_id' => $this->city_id,
            'rating' => $this->rating,
            'comment' => $this->comment,
        ];
    }
}
