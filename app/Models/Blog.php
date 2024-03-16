<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory; 
    use Sluggable;

    protected $table='blogs';
    protected $fillable=[
        'blog_tag_id',
        'user_id',
        'title',
        'slug',
        'short_desc',
        'long_desc',
        'image1',
        'image2',
        'image3',
        'image4',
        'status',
    ];


 
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function tag()
    {
       return $this->belongsTo(BlogTag::class,'blog_tag_id','id');
    }

    public function user()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }
}
