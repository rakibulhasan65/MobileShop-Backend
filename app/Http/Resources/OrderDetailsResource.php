<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailsResource extends JsonResource
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
            'user_id' => $this->user_id,
            'user_name' => $this->user->name,
            'order_invoice' => $this->order->order_invoice,
            'total' => $this->order->total,
            'coupon_code' => $this->orderr->coupon_code,
            'coupon_amount' => $this->order->coupon_amount,
            'shipping_charge' => $this->order->shipping_charge,
            'grand_total' => $this->order->grand_total,
            'name' => $this->order->name,
            'address' => $this->order->address,
            'city' => $this->order->city,
            'state' => $this->order->state,
            'country' => $this->order->countrycountry,
            'zip_code' => $this->order->zip_code,
            'mobile' => $this->order->mobile,
            'email' => $this->order->email,
            'order_status' => $this->order->order_status,
            'payment_method' => $this->order->payment_method,
            'payment_gateway' => $this->order->payment_gateway,
            'product_name'=>$this->product->name,
            'product_quantity'=>$this->quantity,
            'product_price'=>$this->product_price,
            
                      
        ];
    }
}
