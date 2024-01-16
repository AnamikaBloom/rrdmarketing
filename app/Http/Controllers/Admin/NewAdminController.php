<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewAdminController extends Controller
{
    public function index()
    {   $admins=Admin::where('role','!=','SuperAdmin')->get();
        return view('admin.sub-admin.view',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sub-admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $slug = Helper::getBlogUrl($request->name);
        $admin=new Admin;
        $admin->name=$request->name;
        $admin->user_name =$slug;
        $admin->email=$request->email;
        $admin->mobile=$request->phone;
        $admin->password_hint=$request->password;
        $admin->password=Hash::make($request->password);
        $admin->save();
        return redirect()->route('admin-view-control-users')->with('success','New Sub Admin Added,Please Provide him Access');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=Admin::findOrFail($id);

        return view('admin.sub-admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin=Admin::findOrFail($id);
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->mobile=$request->phone;
        $admin->password_hint=$request->password;
        $admin->password=Hash::make($request->password);
        $admin->save();
        return redirect()->route('admin-view-control-users')->with('success','Sub Admin Updated,Please Provide him Access');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin=Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin-view-control-users')->with('success','Sub Admin Deleted,Please Provide him Access');

    }
}
