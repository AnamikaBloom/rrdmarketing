<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;

class AdminControllAccessController extends Controller
{
    public function index()
    {
        $admins=Admin::where('role','!=','SuperAdmin')->get();
        return view('admin.control-access.view',compact('admins'));
    }

    public function create()
    {
        $admins=Admin::where('role','!=','SuperAdmin')->get();
        return view('admin.control-access.add',compact('admins'));
    }

    public function store(Request $request)
    {
       // dd($request->all());
        if(!$request->menu)
            return back()->with('flash_error', 'Please select atleast One');

        $user = Admin::find($request->adminId);
        $user->control_access = implode("|",$request->menu);
        $user->save();
        return back()->with('flash_success', 'Control Access Updated');
    }
    public function show($id)
    {
        $admin=Admin::FindOrFail($id);
        $menus=explode('|',$admin->control_access);
        // dd($menus);
        return view('admin.control-access.view-all-control-access',compact('admin','menus'));
    }
    public function edit($id)
    {
        $admin=Admin::FindOrFail($id);
        $menus=explode('|',$admin->control_access);
        return view('admin.control-access.edit',compact('admin','menus'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all(),$id);
        if(!$request->menu)
            return back()->with('flash_error', 'Please select atleast One');

        $user = Admin::findOrFail($id);

        $user->control_access = implode("|",$request->menu);
        $user->save();
        return back()->with('flash_success', 'Control Access Updated');

    }
    public function destroy($id)
    {
        $user = Admin::findOrFail($id);
        $user->control_access='';
        $user->save();
        return back()->with('flash_success', 'Control Access Deleted');

    }

}
