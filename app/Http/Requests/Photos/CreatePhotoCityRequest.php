<?php

namespace App\Http\Requests\Photos;

use Illuminate\Foundation\Http\FormRequest;

class CreatePhotoCityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'city_id' => 'nullable|integer|exists:cities,id',
            'caption' => 'nullable|string',
            'image' => 'required'
        ];
    }
}
