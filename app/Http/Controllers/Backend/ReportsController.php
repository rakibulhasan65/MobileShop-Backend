<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view(Request $request)
    {

        $productsReports = [];

        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        if ($startDate && $endDate) {
            $productsReports = Product::query()
                ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                    $startDate = Carbon::parse($startDate)->startOfDay();
                    $endDate = Carbon::parse($endDate)->endOfDay();
                    return $query->whereBetween('created_at', [$startDate, $endDate]);
                })
                ->get();
        } else {
            $productsReports = Product::where('status', '1')->latest()->get();
        }




        return view('backend.reports.view', compact('productsReports'));
    }

    public function sales(Request $request)
    {

        $productsSales = [];

        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        if ($startDate && $endDate) {
            $productsSales = OrderDetail::query()
                ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                    $startDate = Carbon::parse($startDate)->startOfDay();
                    $endDate = Carbon::parse($endDate)->endOfDay();
                    return $query->whereBetween('created_at', [$startDate, $endDate]);
                })
                ->get();
        } else {
            $productsSales = OrderDetail::latest()->get();
        }

        return view('backend.reports.sales', compact('productsSales'));
    }

    public function returns()
    {
        return view('backend.reports.returns');
    }

    public function customerOrders(Request $request)
    {
        $customersOrders = [];
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        if ($startDate && $endDate) {
            $customersOrders = OrderDetail::query()
                ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                    $startDate = Carbon::parse($startDate)->startOfDay();
                    $endDate = Carbon::parse($endDate)->endOfDay();
                    return $query->whereBetween('created_at', [$startDate, $endDate]);
                })
                ->get();
        } else {
            $customersOrders = OrderDetail::latest()->get();
        }

        return view('backend.reports.customer-orders',compact('customersOrders'));
    }

    public function shipping()
    {
        return view('backend.reports.shipping');
    }

}
