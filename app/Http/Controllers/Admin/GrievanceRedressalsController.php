<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GrievanceRedressals;

class GrievanceRedressalsController extends Controller
{
    public function create(){
        return view('admin.grievance-redressals.create');

    }
    public function store(Request $request)
    {
       $grievanceredressals = new GrievanceRedressals;
       $grievanceredressals->content=$request->content;
       $grievanceredressals->status= $request->status;
            $grievanceredressals->save();
            return back()->with('status',' added successfully');



    }
    public function edit($id)
    {
        $data = GrievanceRedressals::find($id);
        return view('admin.grievance-redressals.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
        ]);
        $grievanceredressals = GrievanceRedressals::find($id);
        $grievanceredressals->content= $request->content;
        $grievanceredressals->status= $request->status;
        $grievanceredressals->save();
        return redirect()->route('grievance-redressals-index')->with('status',' Updated Successfully');
    }
    public function index(){
        $datas = GrievanceRedressals::get();
        return view('admin.grievance-redressals.view',compact('datas'));
    }
    public function delete($id)
    {
        $grievanceredressals = GrievanceRedressals::find($id);
        $grievanceredressals->delete();
        return back()->with('status', ' Deleted  Successfully!');

    }
}
