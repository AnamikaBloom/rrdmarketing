<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Image;
use App\Helpers\Helper;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $data = Testimonial::orderBy('id','asc')->paginate(10);
        return view('admin.testimonial.index',compact('data'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name'=>'required',
            'content'=>'required',
            'image'=>'required',
            'status'=>'required'

        ]);
        $testimonial= new Testimonial;
        $testimonial->name=$request->name;
        $testimonial->name=$request->designation;
        $testimonial->content=$request->content;
        $testimonial->status=$request->status;
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileName = "testimonial".time().".".$file->getClientOriginalExtension();
            $file->move(public_path('storage/testimonial/thumbnail'), $fileName);
            $testimonial->image = $fileName;
        }
        // $image = $request->file('image');
        // if($image){
        //     $imagename =uniqid().'-'.$image->getClientOriginalName();

        //     $destinationPath = public_path('storage/testimonial/thumbnail');
        //     $img = Image::make($image->getRealPath());
        //     $img->resize(10, 10, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($destinationPath.'/'.$imagename);

        //     $destinationPath = public_path('storage/testimonial/upload');
        //     $image->move($destinationPath, $imagename);
        //     $testimonial->image = $imagename;
        // }

        if ($testimonial->save())
            return redirect()->route('testimonials-index')->with('flash_success','Testimonial Stored Succesfully');

        else
            return back()->withInput()->with('flash_danger','Unable to create Testimonial');
    }


    public function edit(Request $request){
        $id = request ('id');
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('data'));
    }

    public function update(Request  $request){
        $validate = $request-> validate([]);
        $id=$request->id;
        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->input('name');
        $testimonial->designation = $request->input('designation');
        $testimonial->content = $request -> input('content');
        $testimonial->status = $request ->input('status');

        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $filename = $file->getClientOriginalName();
        //     $filePath = 'storage/testimonial/' . $filename;
        //     $file->move(public_path('storage/testimonial'),$filePath);

        //     $testimonial->image = $filename;
        // }
        // $testimonial->save();
        if($request->hasfile('image')) {
            @unlink(public_path('storage/testimonial/thumbnail/'.$data->image));
            $file = $request->file('image');
            $fileName = "testimonial".time().".".$file->getClientOriginalExtension();
            $file->move(public_path('storage/testimonial/thumbnail'), $fileName);
            $testimonial->image = $fileName;
        }

        // $image = $request->file('image');
        // if($image){
        //     $imagename =uniqid().'-'.$image->getClientOriginalName();

        //     $destinationPath = public_path('storage/testimonial/thumbnail');
        //     $img = Image::make($image->getRealPath());
        //     $img->resize(10, 10, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($destinationPath.'/'.$imagename);

        //     $destinationPath = public_path('storage/testimonial/upload');
        //     $image->move($destinationPath, $imagename);
        //     $testimonial->image = $imagename;
        // }
        $testimonial->save();
        return redirect()->route('testimonials-index')->with('status','Testimonial Updated Successfully');


    }




    public function destroy(Request $request)
    {
        $id=$request->id;
        $testimonial = Testimonial::find($id);
        @unlink('public/storage/testimonial/' . $$testimonial->image);
        $testimonial->delete();
        return back()->with('flash_success','Testimonial Deleted !');
    }



}
