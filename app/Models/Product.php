<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'sku',
        'product_slug',
        'family_color',
        'group_code',
        'product_image',
        'product_price',
        'product_discount',
        'discount_type',
        'final_price',
        'product_video',
        'product_descriptions',
        'product_search_keywords',
        'occasion',
        'meta_title',
        'meta_descriptions',
        'meta_keywords',
        'stock',
        'is_featured',
        'view',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
