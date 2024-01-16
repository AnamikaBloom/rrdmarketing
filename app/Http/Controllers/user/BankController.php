<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BankRequest;
use Auth;



class BankController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
     // View Bank Details
     public function index()
     {
         $user = Auth::user();
        $bankreq=BankRequest::where('user_id',$user->id)->where('status','Approved')->orderBy('id','desc')->first();
        $bankRequests=BankRequest::where('user_id',$user->id)->orderBy('id','desc')->get();
         return view('user.bank.bankdetails', compact('bankreq', 'bankRequests'));
     }


    //View Add Bank Deatils Form
    public function create(){
        $user = Auth::user();
        $bankreq = BankRequest::where('user_id',$user->id)->first();
        return view('user.bank.addbank',compact('bankreq'));
    }

    // Save Bank Details
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'account_holder_name' => 'required',
            'account_number' => 'required',
            'account_type' => 'required',
            'ifsc_code' => 'required',
            'bank_name' => 'required',
            'branch' => 'required',
        ], [
            'account_holder_name.required' => 'Account Holder Name field is required',
            'account_number.required' => 'Account Number field is required',
            'account_type.required' => 'Account Type field is required',
            'ifsc_code.required' => 'IFCS Code field is required',
            'bank_name.required' => 'Bank Name field is required',
            'branch.required' => 'Branch Name field is required',
        ]);

        $user_id = Auth::user()->id;
        $bank_request = new BankRequest;
        $bank_request->account_holder_name = $request->account_holder_name;
        $bank_request->account_number = $request->account_number;
        $bank_request->account_type = $request->account_type;
        $bank_request->ifsc_code = $request->ifsc_code;
        $bank_request->bank_name = $request->bank_name;
        $bank_request->branch = $request->branch;
        $bank_request->user_id = $user_id;
        $bank_request->request_no = 'BRU' .date("dmy").rand(100, 999);
        $bank_request->save();
    //    dd ($user->all());
        return redirect()->route('bank-details')->with('flash_success', 'Bank Details Added Successfully');
    }




    public function updateBankDetails(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'account_holder_name' => 'required',
            'account_number' => 'required',
            'account_type' => 'required',
            'ifsc_code' => 'required',
            'bank_name' => 'required',
            'branch' => 'required',
        ], [
            'account_holder_name.required' => 'Account Holder Name field is required',
            'account_number.required' => 'Account Number field is required',
            'account_type.required' => 'Account Type field is required',
            'ifsc_code.required' => 'IFCS Code field is required',
            'bank_name.required' => 'Bank Name field is required',
            'branch.required' => 'Branch Name field is required',
        ]);

        $user_id = Auth::user()->id;
        $bank_request = new BankRequest;
        $bank_request->account_holder_name = $request->account_holder_name;
        $bank_request->account_number = $request->account_number;
        $bank_request->account_type = $request->account_type;
        $bank_request->ifsc_code = $request->ifsc_code;
        $bank_request->bank_name = $request->bank_name;
        $bank_request->branch = $request->branch;
        $bank_request->user_id = $user_id;
        $bank_request->request_no = 'BRU' .date("dmy").rand(100, 999);
        $bank_request->save();
    //    dd ($user->all());
        return redirect()->route('bank-details')->with('flash_success', 'Bank Details Added Successfully');
    }

}
