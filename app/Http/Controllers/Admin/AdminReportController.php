<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminReportController extends Controller
{
    public function salesreport()
    {
        $orders= Order::where('status','Order Placed')->get();
        // dd($orders);
        return view('admin.sales-report',compact('orders'));
    }
    public function form16()
    {
        return view('admin.form-16');
    }

    public function form16view()
    {
        return view('admin.form16view');
    }
}
