<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'username' => [
                'required',
                'string',
                'regex:/^\S*$/u',
                'max:30',
                'unique:users,username,' . $this->id . ',id'
            ],
            'description',
            'first_name',
            'last_name',
            'email' => [
                'required',
                'email',
                'max:50',
                'regex:/^[a-z0-9@.]+$/',
                'unique:users,email'
            ],
        ];
    }
}
