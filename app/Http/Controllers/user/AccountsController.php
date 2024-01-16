<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\WalletRequest;
use Illuminate\Http\Request;
use Auth;
class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function fundTransaction(){
        $user=Auth::user();
        $walletRequests=  WalletRequest::where('user_id',$user->id)->where('Active','!=','Approved')->get();
        $rewards=Reward::where('user_id',$user->id)->get();

        return view('user.fund-transaction',compact('walletRequests','rewards'));
    }
    public function fundRequest(){
        $user=Auth::user();
        $walletRequests=  WalletRequest::where('user_id',$user->id)->where('Active','Approved')->get();
        return view('user.fund-request',compact('walletRequests'));
    }
}
