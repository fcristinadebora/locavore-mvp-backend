<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListProducersRequest extends FormRequest
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
            'search' => 'string|nullable',
            'lat' => 'nullable|numeric|min:-180|max:180',
            'lng' => 'nullable|numeric|min:-90|max:90',
            'excludeIds' => 'string|nullable',
            'categories' => 'string|nullable',
            'maxDistance' => 'string|nullable'
        ];
    }
}
