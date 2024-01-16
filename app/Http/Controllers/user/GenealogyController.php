<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Tree;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class GenealogyController extends Controller
{
    public function genealogy(Request $request){

        if($request->member_id){
            $user=User::where('member_id',$request->member_id)->first();
            $tree=Tree::where('user_id',$user->id)->first();

        }else{
            $user=Auth::user();
            $tree=Tree::where('user_id',$user->id)->first();
        }
        return view('user.Genealogy.genealogy',compact('tree','user'));
}
public function genealogySearch(Request $request){
    // $search_id=$request->member_id;
    // $user=Auth::user();
    // $tree=Tree::where('user_id',$user->id)->first();
    // $search=User::where('member_id',$search_id)->first();
    // if($tree->left_user_id==$search->id){
    //     $memberId=$search_id;
    // }elseif($tree->middle_user_id==$search->id){
    //     $memberId=$search_id;

    // }elseif($tree->right_user_id==$search->id){
    //     $memberId=$search_id;

    // }elseif($tree->fourth_user_id==$search->id){
    //     $memberId=$search_id;

    // }else{
    //     return redirect()->back()->with('error','No Such Member Found In Your Downline');
    // }
    // dd($request->all());
    $user=User::where('member_id',$request->member_id)->first();
    // dd($user);
        if($user){
            // dd('dd');
            $memberId=$request->member_id;
            return redirect()->route('child-genealogy',$memberId);

        }else{
            return redirect()->back()->with('error','No Such Member Found In Your Downline');
        }

}
public function child_genealogy($memberId){
    $user=User::where('member_id',$memberId)->first();
    $tree=Tree::where('user_id',$user->id)->first();

    return view('user.Genealogy.child-genealogy',compact('tree','user'));
}

}
