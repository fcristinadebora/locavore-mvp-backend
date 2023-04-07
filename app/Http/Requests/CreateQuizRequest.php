<?php

namespace App\Http\Requests;

use App\Enums\QuestionType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CreateQuizRequest extends FormRequest
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
            'name' => "required|string",
            'questions' => 'nullable|array',
            'questions.*.type' => [
                'nullable',
                new Enum(QuestionType::class)
            ],
            'questions.*.question' => 'nullable|string',
            'questions.*.order' => 'nullable|numeric',
            'questions.*.options' => 'nullable|array',
            'questions.*.options.*' => 'nullable|string'
        ];
    }
}
