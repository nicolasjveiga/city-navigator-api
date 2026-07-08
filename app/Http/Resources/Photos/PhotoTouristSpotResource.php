<?php 

namespace App\Http\Resources\Photos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotoTouristSpotResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image' => $this->image ? asset('storage/' . $this->image) : null,
            'tourist_spot_id' => $this->tourist_spot_id,
            'caption' => $this->caption,
            'city_id' => $this->city_id,
        ];
    }
}
