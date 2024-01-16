<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Image;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userprofile(){

        $user = Auth::user();
        $states=State::all();
        return view('user.profile.profile',compact('user','states'));
    }
    public function pinGeneration(){
        $user = Auth::user();
        $states=State::all();
        return view('user.profile.pin-generation',compact('user','states'));
    }

    public function profileupdate(Request $request)
    {
        // dd($request->all());
        $user_id=Auth::user()->id;
        $user=User::findOrFail($user_id);
        $image = $request->file('photo');
        if($request->file('photo')){
            if($user->photo){
                unlink(public_path('storage/user/'.$user->photo));
                // unlink(public_path('storage/user/thumbnail/'.$user->photo));
            }

            $imagename = $image->getClientOriginalName();
            $destinationPath = public_path('storage/user/');
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$imagename);

            // $destinationPath = public_path('storage/user/upload');
            // $image->move($destinationPath, $imagename);
            $user->photo=$imagename;

        }
        // dd($request->all());
        if($request->has('email'))
        $user->email = $request->email;
        if($request->has('mobile'))
        $user->mobile = $request->mobile;


    // if($request->has('address'))
        // $user->address = $request->address;

    if($request->has('gender'))
        $user->gender = $request->gender;

    if($request->has('house_no'))
        $user->house_no = $request->house_no;

        if($request->has('street'))
        $user->street = $request->street;
        if($request->has('landmark'))
        $user->landmark = $request->landmark;
        if($request->has('city'))
        $user->city_id = $request->city;
        if($request->has('state'))
        $user->state_id = $request->state;
        if($request->has('district'))
        $user->district = $request->district;
        if($request->has('pincode'))
        $user->pincode = $request->pincode;
        if($request->has('aadhar_no'))
        $user->aadhar_no = $request->aadhar_no;
        if($request->has('nominee_name'))
        $user->nominee_name = $request->nominee_name;
        if($request->has('nominee_relation'))
        $user->nominee_relation = $request->nominee_relation;
        if($request->has('nominee_age'))
        $user->nominee_age = $request->nominee_age;
        if($request->has('date_of_birth'))
        $user->date_of_birth = $request->date_of_birth;
        if($request->has('gender'))
        $user->gender = $request->gender;
        if($request->has('aadhar'))
        $user->aadhar_no=$request->aadhar;

        $user->save();

        // $user->email=$request->email;
        // $user->mobile=$request->mobile;
        // $user->house_no=$request->house_no;
        // $user->street=$request->street;
        // $user->landmark=$request->landmark;
        // $user->city_id=$request->city;
        // $user->state_id=$request->state;
        // $user->district=$request->district;
        // $user->pincode=$request->pincode;
        // $user->aadhar_no=$request->aadhar;
        // $user->nominee_name=$request->nominee_name;
        // $user->nominee_relation=$request->nominee_relation;
        // $user->nominee_age=$request->nominee_age;
        // $user->date_of_birth=$request->dob;
        // $user->gender=$request->gender;
        $user->save();
        return redirect()->route('user-profile')->with('success','Profile Updated Successfully');
    }

    public function changepassword(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $this->validate($request, [
            'oldpass' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8']
        ]);
        $data = $request->all();
       // dd($request->all());
        if (!\Hash::check($data['oldpass'], $user->password)) {

            return back()->with('flash_danger', 'You have entered wrong password');
        } else {

            if ($request->password != $request->confirm_password) {
                return back()->with('flash_danger', 'Password and Confirm Password Must be same!');
            } else {
                $user->password = bcrypt($request->password);
                // $user->password_hint = $request->password;
                $user->save();
                return back()->with('flash_success', 'Password Changed');
            }
        }
    }
    public function updatePassword(Request $request){

        $this->validate($request, [
            'current_password' => 'required',
            'password' => ['required','string','min:8'],
            'confirm_password' => 'required_with:password|same:password|min:8',

        ]);
        $email=Auth::user()->email;
		$user = User::whereEmail($email)->first();
		if (Hash::check($request->password, $user->password)) {
			return back()->with('error',"Don't use your current password");
		}
		$user->password = Hash::make($request->password);


		$user->save();
		//dd($request->all());
        return back()->with('status','change password sucessfully');

    }

}
