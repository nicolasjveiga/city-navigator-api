<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tourist_spot_id' => 'required|integer|exists:tourist_spots,id',
            'comment' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ];
    }
}
