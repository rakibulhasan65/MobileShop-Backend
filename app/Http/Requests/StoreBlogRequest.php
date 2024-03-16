<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'blog_tag_id'=>'required',
        'title' => 'required|max:255',
        'slug'=>'nullable',
        'short_desc'=>'nullable|required',
        'long_desc'=>'nullable|required',
        'image1'=>'required|mimes:png,jpg,jpeg,webp',
        'image2'=>'nullable|mimes:png,jpg,jpeg,webp',
        'image3'=>'nullable|mimes:png,jpg,jpeg,webp',
        'image4'=>'nullable|mimes:png,jpg,jpeg,webp',
        'status'=>'nullable',
    ];
    }
}
