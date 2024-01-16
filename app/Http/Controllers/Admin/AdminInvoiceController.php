<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderList;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Crypt;


class AdminInvoiceController extends Controller
{
    public function addinvoice()
    {
        return view('admin.add-invoice');
    }
    public function invoicelisting()
    {
        $invoices= Order::where('status','Order Placed')->get();
        return view('admin.invoice-listing',compact('invoices'));
    }
    public function generateinvoice($order_id)
    {
        $order_id = Crypt::decryptString($order_id);
        // dd($order_id);
        $order = Order::where('order_id', $order_id)->first();
        $orderlists= OrderList::where('order_id',$order->id)->get();
        $sub_total=0;
        $total=0;
        $status='view';
        $subscription =[];
        return view('admin.invoice.download-invoice',compact('order','orderlists','sub_total','total','status','subscription'));
    }
    public function downloadinvoice($order_id)
    {
        $order_id = Crypt::decryptString($order_id);

        $order = Order::where('order_id', $order_id)->first();
        // dd($order->downloaded);

        if(!$order){
            $order = [];
        }
        $orderlists= OrderList::where('order_id',$order->id)->get();
        $sub_total=0;
        $total=0;
        $status='download';
        $subscription =[];

        $pdf = PDF::loadView('admin.invoice.download-invoice', compact('order','orderlists','sub_total','total','status','subscription'));
        // dd($pdf);
        return $pdf->stream('invoice'.$order->order_id.'pdf');
    }


}
