<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'blog_category' => $this->tag->name,
            'blog_category_slug' => $this->tag->slug,
            'blog_title' => $this->title,
            'blog_slug' => $this->slug,
            'blog_short_description' => $this->short_desc,
            'blog_long_description' => $this->long_desc,
            'blog_image1' => $this->image1,
            'blog_image2' => $this->image2,
            'blog_image3' => $this->image3,
            'blog_image4' => $this->image4,
            'blog_created_by' => $this->user->name,
          
        ];
    }
}
