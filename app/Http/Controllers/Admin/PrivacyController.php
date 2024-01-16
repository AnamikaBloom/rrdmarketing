<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function create(){
        return view('admin.privacy.create');

    }
    public function store(Request $request)
    {
        // dd($request->all());
     
        $privacy = new Privacy;
            
        
       
        $privacy->content=$request->content;

        $privacy->status= $request->status;
            $privacy->save();
            return back()->with('status',' added successfully');



    }
    public function edit($id)
    {
        $data = Privacy::find($id);
        return view('admin.privacy.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
        ]);
        //dd($id);
        // $id=$request->id;
        $privacy = Privacy::find($id);
       
       
        // $terms->name= $request->name;
        $privacy->content= $request->content;
       


        $privacy->status= $request->status;
    
        $privacy->save();
        return redirect()->route('privacy-index')->with('status',' Updated Successfully');
    }
    public function index(){
        $datas = Privacy::get();
        return view('admin.privacy.index',compact('datas'));
    }
    public function delete($id)
    {
        // $id=$request->id;
        $privacy = Privacy::find($id);
        // dd($id);
     
        $privacy->delete();
        return back()->with('status', ' Deleted  Successfully!');

    }
}
