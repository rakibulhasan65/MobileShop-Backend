<?php

namespace App\Http\Controllers\Api\V1;

use DB;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\OrderDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\OrderDetailsResource;
use App\Models\Wishlist;

class CustomerApiController extends Controller
{


    public function orders()
    {
        $orders = Order::where('user_id',Auth::user()->id)->get();

        return OrderResource::collection($orders);

        // return response()->json([
        //     'message'=> "User order",
        //     'orders'=>$orders,
        // ]);

    }

    public function orderStore(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }



        try {

            DB::beginTransaction();

            $order= Order::create([
                'user_id'=>Auth::user()->id,
                'order_invoice'=>Str::random(10). Auth::user()->id,
                'total'=>$request->total,
                'coupon_code'=>$request->coupon_code,
                'coupon_amount'=>$request->coupon_amount,
                'shipping_charge'=>$request->shipping_charge,
                'grand_total'=>$request->grand_total,
                'name' =>$request->name,
                'address'=>$request->address,
                'city'=>$request->city,
                'state'=>$request->state,
                'country'=>$request->country,
                'zip_code'=>$request->zip_code,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'order_status'=>"processing",
                'payment_method'=>$request->payment_method,
                'payment_gateway'=>$request->payment_gateway,

            ]);
            $product =$request->product_id;
            if($request->coupon_code =!null && $request->coupon_amount =!null)
            {
                $coupon_status = 1;
            }
            for ($count = 0; $count < count($product); $count++) {
                $data = array(
                    'user_id'=>Auth::user()->id,
                    'order_id'=> $order->id,
                    'product_id'=>$request->product_id[$count] ,
                    'quantity'=>$request->quantity[$count] ,
                    'product_price'=>$request->product_price[$count] ,
                    'coupon_status'=>$coupon_status,
                    'created_at'=>now(),
                    'updated_at'=>now(),
                );

                $insert_data[] = $data;

            }
            OrderDetail::insert($insert_data);


            DB::commit();

            return response()->json([
                'message'=> "Order Place Successfully ",
                'data'=>$order
            ]);

        } catch (\Exception $e) {



            DB::rollback();
            return response()->json([
                'message'=> "Something went wrong",
            ]);



            throw $e;


        }

    }

    public function orderDetails($order)
    {

        $order = Order::where('order_invoice',$order)->first();
        $orderdetails = OrderDetail::where('order_id',$order->id)->first();

        // return OrderDetailsResource::collection($orderdetails);

        return response()->json([
            'message'=> "Order Details",
            'order'=>$order,
            'orderdetails'=>$orderdetails,
        ]);

    }

    public function storeWishlist(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $checklist = Wishlist::where('id',$request->product_id)->first();
        if( $checklist =!null)
        {
            return response()->json([
                'message'=> "Product Already in Wishlist",

            ]);
        }
        Wishlist::create([
            'user_id'=> Auth::user()->id,
            'product_id'=>$request->product_id,
        ]);

        return response()->json([
            'message'=> "Product Added to Wishlist",

        ]);
    }

    public function getUserWishlist()
    {
        $products= Wishlist::with('product')->where('user_id',Auth::user()->id)->get();

        return response()->json($products);
    }


}
