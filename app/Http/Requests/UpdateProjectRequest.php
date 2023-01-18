<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|min:10|max:100',
            'content' => 'required',
            'image' => 'nullable|image|max:500',
            'category_id' => 'nullable|exists:categories,id',
            'technologies' => 'nullable|exists:technologies,id',
            'slug' => 'unique:projects,slug',
            'content' => 'required',
            'thumb' => 'nullable'
        ];
    }
}
