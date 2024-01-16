<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function create(){
        return view('admin.refund.create');

    }
    public function store(Request $request)
    {
       $privacy = new Refund;
       $privacy->content=$request->content;
       $privacy->status= $request->status;
            $privacy->save();
            return back()->with('status',' added successfully');
    }
    public function edit($id)
    {
        $data = Refund::find($id);
        return view('admin.refund.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
        ]);
        $refund = Refund::find($id);
       // $terms->name= $request->name;
        $refund->content= $request->content;
        $refund->status= $request->status;
        $refund->save();
        return redirect()->route('refund-index')->with('status',' Updated Successfully');
    }
    public function index(){
        $datas = Refund::get();
        return view('admin.refund.index',compact('datas'));
    }
    public function delete($id)
    {

        $refund = Refund::find($id);
        $refund->delete();
        return back()->with('status', ' Deleted  Successfully!');

    }
}
