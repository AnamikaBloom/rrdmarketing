<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AdminAboutusController extends Controller
{
    //index
    public function index(){
        $data = AboutUs::orderBy('id','desc')->paginate(10);
        return view('admin.aboutus.index',compact('data'));
    }

    // View Aboutus Create Page
    public function create(){
        return view('admin.aboutus.create');
    }


    // Store About us
    public function store(Request $request){
        $validate = $request->validate([
            'heading'=>'required',
            'content'=>'required',
            'short_content'=>'required',
            'image'=>'required',
            'status'=>'required'
        ]);
        $aboutus = new AboutUs;
        $aboutus->heading=$request->heading;
        $aboutus->content=$request->content;
        $aboutus->short_content=$request->short_content;
        $aboutus->status=$request->status;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/aboutus/' . $filename;
            $file->move(public_path('storage/aboutus'),$filePath);
            $aboutus->image = $filename;
        }
        if($aboutus->save())
        {
            return redirect()->route('aboutus-index')->with('flash_succes','Aboutus Stored Successfully');
        }
    }

    // View Edit Page
    public function edit(Request $request){
        $id = request('id');
        $data = AboutUs::find($id);
        return view('admin.aboutus.edit',compact('data'));
    }

    //  Update Aboutus Page
    public function update(Request $request){
        $validate = $request->validate([]);
        $id=$request->id;
        $aboutus = AboutUs::find($id);
        $aboutus->heading=$request->input('heading');
        $aboutus->content=$request->input('content');
        $aboutus->short_content=$request->input('short_content');
        $aboutus->status=$request->input('status');
        if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $filePath = 'storage/aboutus/' . $filename;
                $file->move(public_path('storage/aboutus'),$filePath);
                //dd($filename);
                $aboutus->image = $filename;
            }
        $aboutus->save();
        return redirect()->route('aboutus-index')->with('flash_success','AboutUs Updated Successfully');
    }


    public function destroy(Request $request){
        $id =$request->id;
        $aboutus = AboutUs::find($id);
        @unlink('public/storage/aboutus/'.$aboutus->image);
        $aboutus->delete();
        return back()->with('flash_success','AboutUs Deleted Successfully !');
    }
}
