<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'site_name' => $this->site_name,
            'site_logo' => $this->site_logo,
            'copyright' => $this->copyright,
            'slogan' => $this->slogan,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'about_site' => $this->about_site,
            'facebook_link' => $this->facebook,
            'google_link' => $this->google,
            'google_plus_link' => $this->google_plus,
            'instagram_link' => $this->instagram,
            'youtube_link' => $this->youtube,
            'contact_no' => $this->contact,
            'email' => $this->email,
            'webmail' => $this->webmail,
            'address' => $this->address,
          
        ];
    }
}
