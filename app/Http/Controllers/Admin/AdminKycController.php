<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KycRequest;

class AdminKycController extends Controller
{
    public function index()
    {
        $all_kyc_request = KycRequest::get();
        return view('admin.kyc.KYC',compact('all_kyc_request'));
    }

    public function view($id)
    {

        $kyc = KycRequest::find($id);
        return view('admin.kyc.kycView',compact('kyc'));
    }

    public function update(Request $request)
    {

        $id=$request->id;
        $user_id = $request->user_id;
        $status = $request->status;
        $reasons = $request->reasons;

        $kyc_up = KycRequest::find($id);
        $kyc_up->status = $status;
        $kyc_up->reasons = $reasons;
        $kyc_up->save();

        return back()->with('flash_success','KYC Status Updated Successfully');
    }
}
