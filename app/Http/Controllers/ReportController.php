<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function sale($id)
    {
        if ($id == 0) {
            $products = Order::with('products')->get()->groupBy(DB::raw('DATE(created_at)'));
        } else {
            $products = Order::with('products')->get()->groupBy(DB::raw('MONTH(created_at)'));
        }

        // dd($products);
        return view('admin.operator.report.sale', compact('products'));
    }

    public function saleShow($date)
    {
        if (strlen($date) > 7) {
            $products = Product::whereHas('orders')->where(DB::raw("(DATE_FORMAT(created_at,'%d-%m-%Y'))"), '=', $date)->orderBy('created_at',  'desc')->get();
        } else {
            $products = Product::whereHas('orders')->where(DB::raw("(DATE_FORMAT(created_at,'%m-%Y'))"), '=', $date)->orderBy('created_at',  'desc')->get();
        }
        return view('admin.operator.report.saleShow', compact('products', 'date'));
    }

    public function customer()
    {
        $customers = Customer::where('whatsapp', '!=', null)->orderBy('created_at', 'desc')->get();
        return view('admin.operator.report.customer', compact('customers'));
    }
}
