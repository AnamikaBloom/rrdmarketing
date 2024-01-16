<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Terms;
class TermsController extends Controller
{

    public function create(){
        return view('admin.terms.create');

    }
    public function store(Request $request)
    {
        // dd($request->all());

        $terms = new Terms;



        $terms->content=$request->content;

        $terms->status= $request->status;
            $terms->save();
            return back()->with('status',' added successfully');



    }
    public function edit($id)
    {
        $data = Terms::find($id);
        return view('admin.terms.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
        ]);
        //dd($id);
        // $id=$request->id;
        $terms = Terms::find($id);


        // $terms->name= $request->name;
        $terms->content= $request->content;



        $terms->status= $request->status;

        $terms->save();
        return redirect()->route('terms-index')->with('status',' Updated Successfully');
    }
    public function index(){
        $datas = Terms::get();
        return view('admin.terms.index',compact('datas'));
    }
    public function delete($id)
    {
        // $id=$request->id;
        $terms = Terms::find($id);
        // dd($id);

        $terms->delete();
        return back()->with('status', ' Deleted  Successfully!');

    }
}
