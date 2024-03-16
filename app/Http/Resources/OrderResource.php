<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'order_invoice' => $this->order_invoice,
            'total' => $this->total,
            'coupon_code' => $this->coupon_code,
            'coupon_amount' => $this->coupon_amount,
            'shipping_charge' => $this->shipping_charge,
            'grand_total' => $this->grand_total,
            'name' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->countrycountry,
            'zip_code' => $this->zip_code,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'order_status' => $this->order_status,
            'payment_method' => $this->payment_method,
            'payment_gateway' => $this->payment_gateway,
            // 'order_details'=> OrderDetailsResource::collection($this->orderdetails),
                      
        ];
    }
}
