<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tree;
use App\Models\User;
use Auth;


class GenealogyController extends Controller
{
    public function genealogy($id){
        $users =User::find($id);{

            $user=User::where('member_id',$users->member_id)->first();
            $tree=Tree::where('user_id',$user->id)->first();



        }
        return view('admin.genealogy.genelogy',compact('tree','user'));
}
public function child_genealogy($memberId){
    $user=User::where('member_id',$memberId)->first();
    $tree=Tree::where('user_id',$user->id)->first();

    return view('admin.genealogy.child-genelogy',compact('tree','user'));
}
}
