<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetCoursesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category' => 'array',
            'category.*' => 'integer',
            'rating' => 'numeric|min:0|max:5',
            'language' => 'array',
            'language.*' => 'integer',
            'level' => 'array',
            'level.*' => 'integer',
            'price' => 'string|in:free,paid,all',
            'duration' => 'array',
            'duration.*' => 'in:extraShort,short,medium,long,extraLong',
            'sort' => 'string|in:num_reviews,total_students,average_rating,created_at',
        ];
    }
}
