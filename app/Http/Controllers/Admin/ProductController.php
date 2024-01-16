<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use App\Helpers\Helper;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\ProductImage;
use Image;
use Str;

class ProductController extends Controller
{
    public function index(){
        $products=Product::paginate(10);
        // dd($products);
        return view('admin.E-commerce.product.view',compact('products'));
       }

       public function add(){
        $categories=Category::where('status','Active')->get();
        $colors=Color::where('status','Active')->get();
        $sizes=Size::where('status','Active')->get();
        return view('admin.E-commerce.product.add',compact('categories','colors','sizes'));
       }
       public function create(Request $request){
       // dd($request->all());

        $this->validate($request, [
            // 'childcategory_id' => 'required',
            'name' => 'required',
            'brand' => 'required',
            // 'color' => 'required',
            // 'size' => 'required',
            'rsp' => 'required',
            'sh' => 'required',
            'hsn_code' => 'required',
            'mrp_price' => 'required',
            'selling_price' => 'required',
            'sku' => 'required',
            'description' => 'required',
            //'details' => 'required',
            'quantity' => 'required',
            'gst' => 'required',
            'type' => 'required',
            'featured' => 'required',
            'status' => 'required',
            'images' => 'required',

        ]);
      // dd($request->all());
        $slug = Helper::getBlogUrl($request->name);
        if (Product::where('slug', '=', $slug)->count() > 0)
        {
            return back()->with('flash_error', 'Product Already Exits');
        }
        else{
            if($request->colors){
                $colors=implode('#',$request->colors);

            }else{
                $colors=null;
            }
            if($request->sizes){
            $sizes=implode('#',$request->sizes);
            }else{
               $sizes=null;
            }

            $data = new Product;
            $data->name = $request->name;
            if($request->has('category_id'))
                $data->category_id = $request->category_id;
            if($request->has('subcategory_id'))
                $data->subcategory_id = $request->subcategory_id;
            // $data->childcategory_id = $request->childcategory_id;
            // $data->description = $request->description;
            $data->brand = $request->brand;
            $data->colors = $colors;
            $data->sizes = $sizes;
            $data->slug = $slug;
            $data->sku = $request->sku;
            $data->sh= $request->sh;
            $data->rsp =$request->rsp;
            $data->hsn_code = $request->hsn_code;
            $data->price = $request->mrp_price;
            $data->selling_price = $request->selling_price;
            $data->description = $request->description;
            // $data->details = $request->details;
            $data->quantity = $request->quantity;
            $data->gst = $request->gst;
            $data->type = $request->type;
            $data->featured = $request->featured;
            $data->status = $request->status;
            $data->top_rated = $request->top_rated;
            $data->save();
            if($request->hasfile('images'))
        {
            $imgCount = 0;
            foreach($request->file('images') as $key=>$image)
            {
                $imgCount++;
                $imagename = $image->getClientOriginalName();
               $destinationPath = public_path('storage/product/');
               $img = Image::make($image->getRealPath());
               $img->resize(100, 100, function ($constraint) {
                   $constraint->aspectRatio();
               })->save($destinationPath.'/'.$imagename);

               $destinationPath = public_path('storage/product/');
               $image->move($destinationPath, $imagename);


                $product_images= new ProductImage;
                $product_images->product_id = $data->id;
                $product_images->image = $imagename;
                // if ($imgCount == 1) {
                //     $product_images->is_featured = 1;
                // }
                // else{
                //     $product_images->is_featured = 0;
                // }
                $product_images->save();
            }
        }
            return redirect()->route('products')->with('flash_success', 'Product Created successfully');

         }
        }
         public function edit($slug){
            $categories=Category::where('status','Active')->get();
            $data = Product::where('slug',$slug)->first();
            $color=explode('#',$data->colors);
        $size=explode('#',$data->sizes);
        $colors=Color::where('status','Active')->get();
        $sizes=Size::where('status','Active')->get();
            return view('admin.E-commerce.product.edit',compact('data','categories','colors','sizes'));
        }
        public function update(Request $request ,$slug){
            $this->validate($request, [
                // dd($request->all());
                'name' => 'required',
            ]);
            if($request->colors){
                $colors=implode('#',$request->colors);

            }else{
                $colors=null;
            }
            if($request->sizes){
            $sizes=implode('#',$request->sizes);
            }else{
               $sizes=null;
            }
            //dd($request->all(),$colors,$sizes);
            $data = Product::where('slug',$slug)->first();
            $data->name = $request->name;
            $data->category_id = $request->category_id;
            $data->subcategory_id = $request->subcategory_id;
             $data->childcategory_id = $request->childcategory_id;
            $data->description = $request->description;
            $data->brand = $request->brand;
             $data->colors = $colors;
            $data->sizes = $sizes;
            $data->slug = $slug;
            $data->sh= $request->sh;
            $data->rsp= $request->rsp;
            $data->sku = $request->sku;
            $data->hsn_code = $request->hsn_code;
            $data->price = $request->mrp_price;
            $data->selling_price = $request->selling_price;
            $data->description = $request->description;
            $data->details = $request->details;
            $data->quantity = $request->quantity;
            $data->gst = $request->gst;
            $data->type = $request->type;
            $data->featured = $request->featured;
            $data->top_rated = $request->top_rated;
            $data->status = $request->status;
            if($request->hasfile('images'))
        {
            $pr_images=ProductImage::where('product_id',$data->id)->get();

                foreach($pr_images as $pr_image){
                    unlink(public_path('storage/product/'.$pr_image->image));
                    //unlink(public_path('storage/product/'.$pr_image->image));
                    $pr_image->delete();
                }
            $imgCount = 0;
            foreach($request->file('images') as $key=>$image)
            {
                $imgCount++;
                $imagename = $image->getClientOriginalName();
               $destinationPath = public_path('storage/product/');
               $img = Image::make($image->getRealPath());
               $img->resize(100, 100, function ($constraint) {
                   $constraint->aspectRatio();
               })->save($destinationPath.'/'.$imagename);

               $destinationPath = public_path('storage/product/');
               $image->move($destinationPath, $imagename);


                $product_images= new ProductImage;
                $product_images->product_id = $data->id;
                $product_images->image = $imagename;
                // if ($imgCount == 1) {
                //     $product_images->is_featured = 1;
                // }
                // else{
                //     $product_images->is_featured = 0;
                // }
                $product_images->save();
            }

        }
        // dd($request->all());
            $data->save();

            return redirect()->route('products')->with('flash_success', 'Product Updated successfully');
        }
        public function delete(Request $request, $id){
            $product = Product::find($id);
            $product_images=ProductImage::where('product_id',$product->id)->get();
            @unlink('public/storage/product/'.$product->image);
            $product->delete();
            return back()->with('flash_success','Product Deleted Successfully !');
        }
}
