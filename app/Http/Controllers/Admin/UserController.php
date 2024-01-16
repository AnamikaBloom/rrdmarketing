<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tree;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::paginate(10); 
        return view('admin.user.index',compact('users'));
    }
    public function genealogy(Request $request,$id){
// dd($request->member_id);
        if($request->member_id){
            $user=User::where('member_id',$request->member_id)->first();
            $tree=Tree::where('user_id',$user->id)->first();

        }else{
            $user=User::find($id);
            $tree=Tree::where('user_id',$id)->first();
        }
        return view('admin.user.Genelogy.genelogy',compact('tree','user'));
}
public function child_genealogy($memberId){
    $user=User::where('member_id',$memberId)->first();
    $tree=Tree::where('user_id',$user->id)->first();

    return view('admin.user.Genelogy.child-genelogy',compact('tree','user'));
}
}
