<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Banner;
use App\Helpers\Helper;

class BannerController extends Controller
{

        public function index(){
            $banners=Banner::paginate(10);
            return view('admin.banner.view',compact('banners'));
           }

           public function add(){
            return view('admin.banner.add');
           }
           public function create(Request $request)
           {
            $slug = Helper::getBlogUrl($request->title);
            if (Banner::where('slug', '=', $slug)->count() > 0)
            {
                return back()->with('flash_error', 'Banner Already Exits');
            }else{
                $image = $request->file('image');
                $imagename = time().'.'.$image->getClientOriginalExtension();

                $destinationPath = public_path('storage/banner/');
                $img = Image::make($image->getRealPath());
                $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$imagename);

                $destinationPath = public_path('storage/banner/');
                $image->move($destinationPath, $imagename);



             $banner=new Banner();
             $banner->title=$request->title;
             $banner->slug=str_replace(' ','-',strtolower($request->title)) ;
             $banner->image=$imagename;
             $banner->title_color=$request->title_color;
             $banner->status=$request->status;
             $banner->save();
              return redirect()->route('banner')->with('flash_success',"Banner Added successfully");
            }

           }
           public function edit($id){
            // dd($id);
            $data = Banner::find($id);
            return view('admin.banner.edit',compact('data'));
        }
        public function update(Request $request ,$id){
            // dd($id);
            $this->validate($request, [
                'title' => 'required',
            ]);
            $data = Banner::find($id);
            // dd($data);

            $data->status = $request->status;
            if($request->hasfile('image')) {
                @unlink(public_path('storage/banner/'.$data->image));
                $file = $request->file('image');
                $fileName = "banner".time().".".$file->getClientOriginalExtension();
                $file->move(public_path('storage/banner'), $fileName);
                $data->image = $fileName;
            }

            // if($request->hasfile('image'))
            // {
            //     @unlink(public_path('storage/banner/'.$data->image));
            //     $image = $request->file('image');
            //     $imagename = time().'.'.$image->getClientOriginalExtension();

            //     $destinationPath = public_path('storage/banner/');
            //     $img = Image::make($image->getRealPath());
            //     $img->resize(100, 100, function ($constraint) {
            //         $constraint->aspectRatio();
            //     })->save($destinationPath.'/'.$imagename);

            //     $destinationPath = public_path('storage/banner/');
            //     $data->image=$imagename;
            // }
            $data->title=$request->title;
            $data->slug=str_replace(' ','-',strtolower($request->title)) ;
            $data->title_color=$request->title_color;
            $data->status=$request->status;
            // dd($data);
            $data->save();
            return back()->with('flash_success', ' Updated successfully');
        }
        public function delete($slug)
        {
            $data = Banner::find($slug);
            @unlink(public_path('storage/banner/'.$data->image));

            $data->delete();
            return back()->with('flash_success', 'Banner Deleted  Successfully!');
        }

}
