<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Image;
use App\Helpers\Helper;
use App\Models\ChildCategory;


class ChildCategoryController extends Controller
{
    public function index(){
        $childCategories=ChildCategory::paginate(10);
        return view('admin.E-commerce.childCategory.view',compact('childCategories'));
       }

       public function add(){
        $categories=Category::all();
        return view('admin.E-commerce.childCategory.add',compact('categories'));
       }
       public function create(Request $request){
        // dd($request->all());
        $slug = Helper::getBlogUrl($request->name);
        if (ChildCategory::where('slug', '=', $slug)->count() > 0)
        {
            return back()->with('error', 'Child Category Already Exits');
        }
        else{
        // $slug = Helper::makeSlug($request->name);
            // dd($slug);
            $image = $request->file('image');

               $imagename = time().'.'.$image->getClientOriginalExtension();

               $destinationPath = public_path('storage/childcategory/');
               $img = Image::make($image->getRealPath());
               $img->resize(100, 100, function ($constraint) {
                   $constraint->aspectRatio();
               })->save($destinationPath.'/'.$imagename);

               $destinationPath = public_path('storage/childcategory/');
               $image->move($destinationPath, $imagename);
            $data = new ChildCategory;
            $data->category_id = $request->category_id;
            $data->subcategory_id = $request->subcategory_id;
            $data->name = $request->name;
            $data->status = $request->status;
            $data->slug = $slug;
            $data->image = $imagename;
            $data->status = $request->status;
            $data->save();
            return back()->with('success', 'Child Category Created successfully');

         }
        }
        public function edit($slug){
            $data = ChildCategory::find($slug);
        $categories=Category::all();

            return view('admin.E-commerce.childCategory.edit',compact('data','categories'));
        }
        public function update(Request $request ,$slug){
            $this->validate($request, [
                'name' => 'required',
            ]);

            $data = ChildCategory::find($slug);
            $data->name = $request->name;
            $data->status = $request->status;
            if($request->hasfile('image'))
            {
                @unlink(public_path('storage/childcategory/'.$data->image));
                @unlink(public_path('storage/childcategory/'.$data->image));
                $image = $request->file('image');
                $imagename = time().'.'.$image->getClientOriginalExtension();

                $destinationPath = public_path('storage/childcategory/');
                $img = Image::make($image->getRealPath());
                $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$imagename);

                $destinationPath = public_path('storage/childcategory/');
                $data->image = $imagename;
            }


            $data->save();
            return back()->with('success', 'Child Category Updated successfully');
        }
        public function destroy($slug)
        {
            $data = ChildCategory::find($slug);
            @unlink(public_path('storage/childcategory/'.$data->image));
            @unlink(public_path('storage/childcategory/'.$data->image));
            $data->delete();
            return back()->with('success', 'Child Category Deleted  Successfully!');
        }
}
