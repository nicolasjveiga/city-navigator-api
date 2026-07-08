<?php

namespace App\Http\Requests\Photos;

use Illuminate\Foundation\Http\FormRequest;

class CreatePhotoTouristSpotRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tourist_spot_id' => 'nullable|integer|exists:tourist_spots,id',
            'caption' => 'nullable|string',
            'image' => 'required'
        ];
    }
}
