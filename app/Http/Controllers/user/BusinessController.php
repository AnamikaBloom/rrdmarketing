<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Helpers\Helper;
use App\Models\Tree;
use App\Models\Wallet;
use App\Models\WithdrawlRequest;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewBusiness(){

        return view('user.view-business');
    }
    public function directTeam(){
        $user=Auth::user();
        // $tree=Tree::where('user_id',$user->id)->first();
        $users = User::where('sponser_id',$user->member_id)->paginate(15);

        return view('user.direct-team',compact('user','users'));
    }
    public function totalTeam(){
        $user=Auth::user();
        if(!empty($request->from)&&!empty($request->to)){
            $from=$request->from;
            $to=$request->to;
            // dd($from,$to);
            $child_array =  Helper::tree($user->member_id);
            $childs=User::whereIn('member_id',$child_array)->whereBetween('created_at', [$from, $to])->paginate(15);
        }
        else{
            $child_array =  Helper::tree($user->member_id);
            $childs=User::whereIn('member_id',$child_array)->paginate(15);
        }
        return view('user.total-team',compact('user','childs'));
    }
    public function viewCeiling(){

        return view('user.view-ceiling');
    }
    public function payouts(){
        $user=Auth::user();
        $wallet=Wallet::where('user_id',$user->id)->first();
        $payouts= WithdrawlRequest::where(['user_id'=>$user->id])->get();
        return view('user.Payouts',compact('wallet','payouts'));
    }

}
