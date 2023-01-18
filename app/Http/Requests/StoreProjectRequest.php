<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects,title|min:10|max:100',
            'image' => 'nullable|image|max:500',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'technologies' => 'nullable|exists:technologies,id',
            'slug' => 'unique:projects,slug',
            'content' => 'required',
            'thumb' => 'nullable',
        ];
    }
}
