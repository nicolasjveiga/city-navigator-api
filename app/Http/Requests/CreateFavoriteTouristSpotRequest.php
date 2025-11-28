<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFavoriteTouristSpotRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tourist_spot_id' => 'nullable|integer|exists:tourist_spots,id',
        ];
    }
}
