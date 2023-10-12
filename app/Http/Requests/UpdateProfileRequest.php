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
                'bail',
                'required',
                'string',
                'regex:/^\S*$/u',
                'max:30',
                'unique:users,username,' . $this->id . ',id'
            ],
            'description' => ['bail', 'nullable', 'string'],
            'first_name' => ['bail', 'nullable', 'string', 'max:15'],
            'last_name' => ['bail', 'nullable', 'string', 'max:50'],
            'email' => [
                'bail',
                'required',
                'email',
                'max:50',
                'regex:/^[a-z0-9@.]+$/',
                'unique:users,email,' . $this->id . ',id'
            ],
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'username' => is_string($this->username)
                ? strtolower($this->username) : $this->username,
        ]);
    }
}
