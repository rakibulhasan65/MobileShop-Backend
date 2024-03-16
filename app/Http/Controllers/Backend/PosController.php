<?php

namespace App\Http\Controllers\Backend;

use Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PosController extends Controller
{
    public function create()
    {
        return view('backend.pos.create');
    }

    public function checkOut(Request $request)
{

    // return $request->all();

    // DB::beginTransaction();

    // $carttotal = number_format((str_replace(',', '', Cart::total())),2);
    $order= Order::create([
        'user_id'=>Auth::user()->id,
        'order_invoice'=>Str::random(10). Auth::user()->id,
        'total'=>Cart::total(),
        'coupon_code'=>$request->couponCode,
        'coupon_amount'=>$request->couponAmount,
        // 'shipping_charge'=>$request->shipping_charge,
        'grand_total'=>$request->total,
        'name' =>$request->name,
        'address'=>$request->address,
        'city'=>$request->city,
        'state'=>$request->state,
        'country'=>$request->country,
        'zip_code'=>$request->zip_code,
        'mobile'=>$request->mobile,
        'email'=>$request->email,
        'order_status'=>'processing',
        'payment_method'=>"cash",
        'payment_gateway'=>"cash",
        'customer_status'=>1,
       
    ]);
  
    if($request->couponCode =!null && $request->couponAmount > 0)
    {
        $coupon_status = 1;
    }else{
        $coupon_status = 0;
    }
    foreach (Cart::content() as $row) {

        OrderDetail::create([
            'user_id'=>Auth::user()->id,
            'order_id'=>  $order->id,
            'product_id'=>$row->id ,
            'quantity'=>$row->qty ,
            'product_price'=>$row->price ,
            'coupon_status'=>$coupon_status,
            // 'created_at'=>now(),
            // 'updated_at'=>now(),
        ]);

        // $insert_data[] = $data;

    }
    // OrderDetail::insert($insert_data);
 
    
    // DB::commit();
    Cart::destroy();
    return back();
}
}
