<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BankRequest;

class AdminBankListController extends Controller
{


    public function index()
    {
        $all_bank_request = BankRequest::get();
        return view('admin.bankaccountdetails.userbanklist',compact('all_bank_request'));
    }
    public function destroy(Request $request){
        $id=$request->id;
        $bankreq= BankRequest::find($id);
        $bankreq->delete();
        return back()->with('flash_success', 'Bankdetails Deleted  Successfully!');

    }

    public function update(Request $request)
    {

        $id=$request->id;
        $user_id = $request->user_id;
        $status = $request->status;

        $bank_up = BankRequest::find($id);
        $bank_up->status = $status;
        $bank_up->save();

        return back()->with('flash_success','Bank Status Updated Successfully');
    }

}
