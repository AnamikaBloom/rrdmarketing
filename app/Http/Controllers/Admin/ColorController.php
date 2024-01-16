<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors=Color::paginate(10);
        return view('admin.E-commerce.color.view',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.E-commerce.color.add');
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
            'status' => 'required',
        ]);
        $slug = Helper::getBlogUrl($request->name);
    if (Color::where('slug', '=', $slug)->count() > 0)
    {
        return back()->with('errors', 'Color Already Exits');
    }
    else{

        $data = new Color();
        $data->name = $request->name;
        $data->slug = $slug;
        $data->status = $request->status;
        $data->save();
        return back()->with('flash_success', 'Color Created successfully');

     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color,$slug)
    {
        $data = $color->where('slug',$slug)->first();
        return view('admin.E-commerce.color.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color,$slug)
    {
        //dd($request->all());
        $data = $color->where('slug',$slug)->first();
        $slug = Helper::getBlogUrl($request->name);
        if (Color::where('slug', '=', $slug)->count() > 0)
        {
            $data->name = $request->name;
            // dd($request->all());
            $data->slug = $slug;
            $data->status = $request->status;
            $data->save();
            return redirect()->route('colors')->with('error', 'Color Already Exits');
        }
        else{
            $data->name = $request->name;
            // dd($request->all());
            $data->slug = $slug;
            $data->status = $request->status;
            $data->save();

            return redirect()->route('colors')->with('success', 'Color Updated successfully');

         }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color,$slug)
    {
        $data = $color->where('slug',$slug)->first();

        $data->delete();
        return back()->with('success', 'Color Deleted  Successfully!');

    }
}
