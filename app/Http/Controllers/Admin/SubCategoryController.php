<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Category;
use App\Models\SubCategory;
use Image;

class SubCategoryController extends Controller
{
    public function index(){
        $subcategories=SubCategory::paginate(10);
        return view('admin.E-commerce.subCategory.view',compact('subcategories'));
       }

       public function add(){
        $categories=Category::where('status','Active')->get();
        return view('admin.E-commerce.subCategory.add',compact('categories'));
       }
       public function create(Request $request){
        // dd($request->all());
        $slug = Helper::getBlogUrl($request->name);
        // if (SubCategory::where('slug', '=', $slug)->count() > 0)
        // {
        //     return back()->with('error', 'Category Already Exits');
        // }
        // else
        {
            $image = $request->file('image');
               $imagename = time().'.'.$image->getClientOriginalExtension();

               $destinationPath = public_path('storage/subcategory');
               $img = Image::make($image->getRealPath());
               $img->resize(100, 100, function ($constraint) {
                   $constraint->aspectRatio();
               })->save($destinationPath.'/'.$imagename);

               $destinationPath = public_path('storage/subcategory');
               $image->move($destinationPath, $imagename);
            $data = new SubCategory;
            $data->name = $request->name;
            $data->category_id = $request->category_id;
            $data->status = $request->status;
            $data->slug = $slug;
            $data->image = $imagename;
            $data->status = $request->status;
            $data->save();
            return back()->with('flash_success', 'Subcategory Created successfully');

         }
        }
        public function edit($slug){
            $data = SubCategory::find($slug);
        $categories=Category::where('status','Active')->get();

            return view('admin.E-commerce.subCategory.edit',compact('data','categories'));
        }
        public function update(Request $request ,$slug){
            $this->validate($request, [
                'name' => 'required',
            ]);

            $data = SubCategory::find($slug);
            $data->name = $request->name;
            $data->status = $request->status;
            if($request->hasfile('image'))
            {
                @unlink(public_path('storage/subcategory/'.$data->image));
                // @unlink(public_path('storage/subcategory/'.$data->image));
                $image = $request->file('image');
                $imagename = time().'.'.$image->getClientOriginalExtension();

                $destinationPath = public_path('storage/subcategory/');
                $img = Image::make($image->getRealPath());
                $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$imagename);

                $destinationPath = public_path('storage/subcategory/');
            $data->image = $imagename;

            }

            $data->save();
            return back()->with('flash_success', 'Subcategory Updated successfully');
        }
        public function delete($slug)
        {
            $data = SubCategory::find($slug);
            @unlink(public_path('storage/subcategory/'.$data->image));
            // @unlink(public_path('storage/subcategory/'.$data->image));
            $data->delete();
            return back()->with('flash_success', 'Category Deleted  Successfully!');
        }
}
