<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WalletRequest;

class AdminAccountController extends Controller
{
    public function fundrequest()
    {
        $wallet_requests= WalletRequest::where('Active','0')->get();
        return view('admin.fund-request',compact('wallet_requests'));
    }

    public function fundtransaction()
    {
        $wallet_requests= WalletRequest::where('Active','1')->get();
        return view('admin.fund-transaction',compact('wallet_requests'));
    }
    public function fundrequeststatus(Request $request)
    {
        // dd($request->all());
        $fund_request= WalletRequest::find($request->request_id);
        $fund_request->Active= $request->request_status;
        $fund_request->save();
        return redirect()->route('fund-request');
    }
    public function fundrequestdelete($id)
    {
        // dd($id);
        $fund_request_delete= WalletRequest::find($id);
        $fund_request_delete->delete();
        return redirect()->route('fund-request');
    }
}
