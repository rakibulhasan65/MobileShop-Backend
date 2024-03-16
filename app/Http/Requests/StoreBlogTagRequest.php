<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogTagRequest extends FormRequest
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
                'name' => 'string|max:255|unique:blog_tags',
                'slug' => 'string',
                'status' => 'nullable',
            ];
        }
    
        public function messages()
        {
            return [
                'name.required' => 'Please Enter a Blog Tag Name',
                
            ];
        }
 
}
