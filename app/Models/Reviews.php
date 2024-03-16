<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable=['user_id','product_id','rating','review'];

    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
