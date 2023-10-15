<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'birthday' => 'required|date',
            'gender' => 'required|string',
            'address' => 'required|string',
            'post_code' => 'required|string',
            'city_name' => 'required|string',
            'country_name' => 'required|string',
        ];
    }
}
