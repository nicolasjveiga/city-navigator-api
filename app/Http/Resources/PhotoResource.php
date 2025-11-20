<?php 

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image_url' => Storage::url($this->image_url),
            'tourist_spot_id' => $this->tourist_spot_id,
            'caption' => $this->caption,
            'city_id' => $this->city_id,
        ];
    }
}
