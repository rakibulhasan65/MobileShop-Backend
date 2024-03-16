<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id' => $this->id,
            'category_name' => $this->category_name,
            'category_slug' => $this->category_slug,
            'category_discount' => $this->category_discount,
            'meta_titile' => $this->meta_titile,
            'meta_descriptions' => $this->meta_descriptions,
            'meta_keywords' => $this->meta_keywords,           
        ];
    }
}
