<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'order_invoice',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'mobile',
        'email',
        'total',
        'shipping_charge',
        'coupon_code',
        'coupon_amount',
        'order_status',
        'payment_method',
        'payment_gateway',
        'grand_total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
