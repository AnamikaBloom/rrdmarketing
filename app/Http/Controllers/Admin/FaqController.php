<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function create(){
        return view('admin.faq.create');

    }
    public function store(Request $request)
    {
        // dd($request->all());
     
        $data = new Faq;
            
        
       
        $data->question=$request->question;

        $data->answer= $request->answer;
            $data->save();
            return back()->with('status',' added successfully');



    }
    public function edit($id)
    {
        $data = Faq::find($id);
        return view('admin.faq.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
        ]);
        //dd($id);
        // $id=$request->id;
        $data = Faq::find($id);
       
       
        // $terms->name= $request->name;
        $data->question= $request->question;
       


        $data->answer= $request->answer;
    
        $data->save();
        return redirect()->route('faq-index')->with('status',' Updated Successfully');
    }
    public function index(){
        $datas = Faq::get();
        return view('admin.faq.index',compact('datas'));
    }
    public function delete($id)
    {
        // $id=$request->id;
        $data = Faq::find($id);
        // dd($id);
     
        $data->delete();
        return back()->with('status', ' Deleted  Successfully!');

    }
}
