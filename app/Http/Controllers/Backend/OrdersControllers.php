<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersControllers extends Controller
{
    public function ordersListing(){
        $ordersList = Order::latest()->get();
        return view('backend.orders.orders-listing',compact('ordersList'));
    }
}
