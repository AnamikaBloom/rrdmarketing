<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\UserPackage;

class AdminPackageController extends Controller
{
    public function index(Request $request){

        $packages = Package::all();
        if($request->user_id){
            $user = User::find($request->user_id);
            $user_packages = UserPackage::where('user_id',$request->user_id)
            ->whereNotNull('payment_id')
            ->orderBy('id','DESC')
            ->limit(1)
            ->get();
            return view('admin.packages.user-purchase',compact('packages','user_packages','user'));
        }else{
            return view('admin.packages.index',compact('packages'));
        }
    }

    public function add(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'gst' => 'required',
            'status' =>  'required',
        ]);
        $slug = str_replace(' ', '-', strtolower($request->name));
        if (Package::where('slug', $slug)
        ->count() > 0) {
            return back()->with('flash_error', 'Package Already Exits');
        } else {

                $package=new Package;
                $package->name=$request->name;
                $package->slug=$slug;
                $package->amount= $request->amount;
                $package->gst= $request->gst;
                $package->status=$request->status;
                $package->save();


            return redirect()->back()->with('flash_success', "Package Added successfully");
        }
    }
    public function edit($slug){
        $data = Package::where('slug',$slug)->first();

        return view('admin.packages.edit',compact('data'));
    }
    public function update(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'gst' => 'required',
            'status' =>  'required',
        ]);
        $id=$request->id;
        $package = Package::find($id);
        $package->name=$request->name;
        $package->amount= $request->amount;
        $package->gst= $request->gst;
        $package->status=$request->status;
        $package->save();
        return redirect()->route('package')->with('flash_success','Package Updated Successfully');

    }

    public function delete($id){

        $package = Package::find($id);
        $user_packages=UserPackage::where('package_id',$package->id)->get();
        foreach($user_packages as $user_package){
            $user_package->delete();
        }
        $package->delete();
        return redirect()->route('package')->with('flash_success', "Package Deleted successfully");


    }

    public function purchasePackage(Request $request){
        $user = User::find($request->user_id);
        if(!$user){
            return back()->with('error','Invalid User Id');
        }
        $package = Package::find($request->package_id);
        if(!$package){
            return back()->with('error','Invalid Package Id');
        }
        if ($user->state_id == '' || $user->city_id == '' || $user->district == '' || $user->pincode = '' || $user->house_no == '' || $user->street == '' || $user->landmark == '') {
            return back()->with('error','User Profile is not updated');
        }
        $getlastId = UserPackage::where('user_id', $user->id)->orderBy('id', 'desc')->first();
        if ($getlastId) {
            $order_id = "AYSPL_" . time() . $getlastId->id;
        } else {
            $order_id = "AYSPL_" . time() . "1";
        }
        // dd($request->all());
        $txnid = uniqid();
        $email = $user->email;
        $phone = $user->mobile;
        $amount = $request->amount;

        $userPackage = new UserPackage();
        $userPackage->user_id = $user->id;
        $userPackage->package_id = $request->package_id;
        $userPackage->order_id = $order_id;
        $userPackage->amount = $package->amount;
        $userPackage->payment_type = 'COD';
        $userPackage->txn_id = $txnid;
        $userPackage->payment_request_id = $txnid;
        $userPackage->payment_id = $txnid;
        $userPackage->save();
        return back()->with('success','Package added successfully.');

    }

}
