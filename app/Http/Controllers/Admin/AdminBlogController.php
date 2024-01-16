<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Helpers\Helper;
use AUth;
use Image;
class AdminBlogController extends Controller
{

    //
    public function index()
    {
        $blogs=Blog::orderBy('id','desc')->paginate(10);
        return view('admin.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        $slug=Helper::getBlogUrl($request->name);
            $data = new Blog;
            $data->title = $request->name;
            $data->slug = $slug;
            // $data->uploded_by = Auth::guard('admin')->user()->id;
			$data->content = $request->content;
			$data->status = $request->status;
            $image = $request->file('image');

            if($image){
                $imagename =uniqid().'-'.$image->getClientOriginalName();

                $destinationPath = public_path('storage/blogs/thumbnail');
                $img = Image::make($image->getRealPath());
                $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$imagename);

                $destinationPath = public_path('storage/blogs/upload');
                $image->move($destinationPath, $imagename);
                $data->image = $imagename;
            }else{
               $imagename=null;
            }
            if($data->save())
            {
            return redirect()->route('blogs-index')->with('flash_success', 'Blog Created successfully');
            }
    }


    public function edit(Blog $data,$id)
    {
        $blog= $data->findOrFail($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    public function update(Request $request, Blog $blog,$id)
    {
        $data= $blog->findOrFail($id);
        $slug=Helper::getBlogUrl($request->name);

        $data->title = $request->name;
        $data->slug = $slug;
        // $data->uploded_by = Auth::guard('admin')->user()->id;
        $data->content = $request->content;
		$data->status = $request->status;
        $image = $request->file('image');

        if($image){
            @unlink(public_path('storage/blogs/thumbnail/'.$data->image));
            @unlink(public_path('storage/blogs/upload/'.$data->image));
            $imagename =uniqid().'-'.$image->getClientOriginalName();

            $destinationPath = public_path('storage/blogs/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$imagename);

            $destinationPath = public_path('storage/blogs/upload');
            $image->move($destinationPath, $imagename);
            $data->image = $imagename;
        }else{
           $imagename=null;
        }
        if($data->save())
        {
        return redirect()->route('blogs-index')->with('flash_success', 'Blog Updated successfully');
        }
    }


    public function destroy(Blog $blog,$id)
    {
        $data= $blog->findOrFail($id);
        @unlink(public_path('storage/blogs/thumbnail/'.$data->image));
        @unlink(public_path('storage/blogs/upload/'.$data->image));
        $data->delete();
        return redirect()->route('blogs-index')->with('flash_success','Blog Deleted Succesfully');
    }

}
