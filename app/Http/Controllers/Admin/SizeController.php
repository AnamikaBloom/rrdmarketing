<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes=Size::paginate(10);
        return view('admin.E-commerce.size.view',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $childCategories=ChildCategory::where('status','Active')->get();
        return view('admin.E-commerce.size.add',compact('childCategories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'short_name' => 'required',
            'status' => 'required',
        ]);
        $slug = Helper::getBlogUrl($request->name);
    if (Size::where('slug', '=', $slug)->count() > 0)
    {
        return back()->with('errors', 'Size Already Exits');
    }
    else{

        $data = new Size();
        $data->name = $request->name;
        // $data->childcategory_id = $request->childcategory_id;
        $data->short_name = $request->short_name;
        $data->slug = $slug;
        $data->status = $request->status;
        $data->save();
        return back()->with('flash_success', 'Size Created successfully');

     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size,$slug)
    {
        $data = $size->findorFail($slug);
        $childCategories=ChildCategory::all();
        return view('admin.E-commerce.size.edit',compact('data','childCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size,$slug)
    {
        $data = $size->findorFail($slug);
        $newslug = Helper::getBlogUrl($request->name);

        // if (Size::where('slug', '=', $newslug)->count() > 0)
        // {
        //     return back()->with('errors', 'Size Already Exits');
        // }
        // else{
         {
            $data->name = $request->name;
            $data->short_name = $request->short_name;
            $data->slug = $newslug;
            $data->status = $request->status;
            $data->save();
            return redirect()->route('sizes')->with('flash_success', 'Size Updated successfully');

         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size,$slug)
    {
        $data = $size->findorFail($slug);
        $data->delete();
        return back()->with('flash_success', 'Size Deleted  Successfully!');

    }
}
