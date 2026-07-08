<?php 

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewTouristSpotRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tourist_spot_id' => 'nullable|numeric|exists:tourist_spots,id',
            'comment' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ];
    }
}
