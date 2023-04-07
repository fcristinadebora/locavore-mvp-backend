<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'is_active' => 'nullable|boolean',
            'delete_image' => 'nullable|boolean',
            'name' => 'nullable|string',
            'description' => 'nullable|string',
            'quiz_id' => 'nullable|numeric|exists:quizzes,id',
            'image' => 'nullable|image',
            'price' => "nullable|numeric",
            'unit_of_price' => "nullable|string",
            'categories' => 'nullable|array',
            'categories.*' => 'required|numeric|exists:categories,id'
        ];
    }
}
