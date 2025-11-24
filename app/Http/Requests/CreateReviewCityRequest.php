<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewCityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'city_id' => 'nullable|numeric|exists:cities,id',
            'comment' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ];
    }
}
