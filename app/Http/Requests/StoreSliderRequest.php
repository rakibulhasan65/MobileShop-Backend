<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'caption1'=>'string|nullable|max:255',
            'caption2'=>'string|nullable|max:255',
            'caption3'=>'string|nullable|max:255',
            'url'=>'string|nullable|max:255',
            'image'=>'image|mimes:png,jpg,webp,jpeg',
            'status'=>'nullable',
        ];
    }
}
