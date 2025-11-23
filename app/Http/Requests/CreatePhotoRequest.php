<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePhotoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tourist_spot_id' => [
                'nullable',
                'integer',
                'exists:tourist_spots,id',
                'required_without:city_id',
            ],

            'city_id' => [
                'nullable',
                'numeric',
                'exists:cities,id',
                'required_without:tourist_spot_id',
            ],
            'caption' => 'nullable|string',
            'image' => 'required'
        ];
    }
}
