<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\User;

class AdminComplaintController extends Controller
{
    public function viewcomplaint(User $data)

    {

        $data=Complaint::all();
        // dd($data);
        return view('admin.view-complaint',compact('data'));
    }
    public function updatecomplaint()
    {
        $complaints = Complaint::where('status','Pending')->get();
        //dd($complaints);
        return view('admin.update-complaint',compact('complaints'));
    }
    public function update(Request $request)
    {
// dd($request->all());
        $id=$request->id;
        $data = Complaint::find($id);
        $data->status = $request->status;
        if($request->reasons!=null)
        $data->reasons = $request->reasons;

        $data->save();

        return back()->with('flash_success','user Compliant Updated Successfully');
    }

}
