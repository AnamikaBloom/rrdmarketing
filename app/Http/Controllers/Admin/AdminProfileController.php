<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminProfileController extends Controller
{
    public function adminprofile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.admin-profile', compact('admin'));
    }
    public function profileupdate(Request $request)
    {
        // dd($request->all());
        $admin = Auth::guard('admin')->user();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->mobile = $request->mobile;
        $admin->address = $request->address;
        // $admin->image=$request->image;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/admins/' . $filename;
            $file->move(public_path('storage/admins'), $filePath);
            //dd($filename);
            $admin->photo = $filename;
        }
        // dd($admin);
        $admin->save();
        return redirect()->route('admin-profile')->with('success','Profile Updated Successfully');
    }
    public function changepassword(Request $request)
    {
        // dd($request->all());
        $admin = Auth::guard('admin')->user();
        $this->validate($request, [
            'oldpass' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8']
        ]);
        $data = $request->all();
       // dd($request->all());
        if (!\Hash::check($data['oldpass'], $admin->password)) {

            return back()->with('flash_danger', 'You have entered wrong password');
        } else {

            if ($request->password != $request->confirm_password) {
                return back()->with('flash_danger', 'Password and Confirm Password Must be same!');
            } else {
                $admin->password = bcrypt($request->password);
                // $admin->password_hint = $request->password;
                $admin->save();
                return back()->with('flash_success', 'Password Changed');
            }
        }
    }
}