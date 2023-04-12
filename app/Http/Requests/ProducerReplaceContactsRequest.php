<?php

namespace App\Http\Requests;

use App\Enums\ContactType;
use App\Enums\UserType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Facades\Auth;

class ProducerReplaceContactsRequest extends FormRequest
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
            'contacts' => 'nullable|array',
            'contacts.*.type' => [
                'required',
                'string',
                new Enum(ContactType::class)
            ],
            'contacts.*.value' => 'sometimes',
        ];
    }
}
