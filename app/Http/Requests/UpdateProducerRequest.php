<?php

namespace App\Http\Requests;

use App\Enums\UserType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Facades\Auth;

class UpdateProducerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'is_enabled' => 'sometimes|boolean',
            'name' => "sometimes|string",
            'short_description' => 'sometimes|string',
            'long_description' => 'sometimes|string',
            'categories' => 'sometimes|array',
            'categories.*' => 'sometimes|numeric|exists:categories,id'
        ];
    }
}
