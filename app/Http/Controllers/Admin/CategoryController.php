<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use App\Helpers\Helper;
class CategoryController extends Controller
{
    public function index(){
        $categories=Category::paginate(10);
        return view('admin.E-commerce.category.view',compact('categories'));
       }
    
       public function add(){
        return view('admin.E-commerce.category.add');
       }
    
    
       public function create(Request $request){
         //dd($request->all());
        $slug = Helper::getBlogUrl($request->name);
        if (Category::where('slug', '=', $slug)->count() > 0)
        {
            return back()->with('errors', 'Category Already Exits');
        }
        else{
    
            $data = new Category;
            $data->name = $request->name;
            $data->status = $request->status;
            $data->slug = $slug;
            if($request->hasfile('image'))
            {
            $image = $request->file('image');
               $imagename = time().'.'.$image->getClientOriginalExtension();
    
               $destinationPath = public_path('storage/category');
               $img = Image::make($image->getRealPath());
               $img->resize(100, 100, function ($constraint) {
                   $constraint->aspectRatio();
               })->save($destinationPath.'/'.$imagename);
    
               $destinationPath = public_path('storage/category');
               $image->move($destinationPath, $imagename);
            $data->image = $imagename;
    
            }
            $data->save();
            return back()->with('flash_success', 'Category Created successfully');
    
         }
        }
        public function edit($slug){
            $data = Category::find($slug);
    
            return view('admin.E-commerce.category.edit',compact('data'));
        }
        public function update(Request $request ,$slug){
            $this->validate($request, [
                'name' => 'required',
            ]);
    
            $data = Category::find($slug);
            $data->name = $request->name;
            $data->status = $request->status;
            if($request->hasfile('image'))
            {
                @unlink(public_path('storage/category'.$data->image));
                @unlink(public_path('storage/category'.$data->image));
                $image = $request->file('image');
                $imagename = time().'.'.$image->getClientOriginalExtension();
    
                $destinationPath = public_path('storage/category');
                $img = Image::make($image->getRealPath());
                $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$imagename);
    
                $destinationPath = public_path('storage/category');
                $image->move($destinationPath, $imagename);
                $data->image = $imagename;
            }
    
    
            $data->save();
            return back()->with('flash_success', 'Category Updated successfully');
        }
        public function destroy($slug)
        {
            $data = Category::find($slug);
            @unlink(public_path('storage/category'.$data->image));
            @unlink(public_path('storage/category'.$data->image));
            $data->delete();
            return back()->with('flash_success', 'Category Deleted  Successfully!');
        }
}
