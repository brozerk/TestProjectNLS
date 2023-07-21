<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetEventsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'date_from' => 'required|timestamp|before:date_to',
            'date_to' => 'required|timestamp|after:date_from'
        ];
    }
}
