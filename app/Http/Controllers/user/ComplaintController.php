<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Complaint;
use App\Models\User;


class ComplaintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addComplaint(){
        $user= Auth::User();

        return view('user.complaint-report.add-complaint',compact('user'));
    }
    public function complaint_store(Request $request){
       // dd($request->all());

       $user_id=Auth::user()->id;
        $user=new Complaint;
        // $user->name = $request->name;
        $user->email = $request->email;
        $user->user_id = $user_id;
        $user->phone= $request->phone;
        $user->reasons = $request->reasons;
        $user->save();
        return redirect()->route('viewComplaint')->with('success','Complaint raised sucesfully');
    }


    public function viewComplaint(){
        $user=Auth::user();
        $data=Complaint::where('user_id',$user->id)->orderBy('id','desc')->get();
        return view('user.complaint-report.view-complaint',compact('data'));
    }

}

