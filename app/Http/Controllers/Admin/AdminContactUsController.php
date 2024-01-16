<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Reward;

class AdminContactUsController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('admin.contactus.index',compact('data'));
    }

    public function destroy(Request $request)
    {
        $id=$request->id;
        $contactus= Contact::find($id);
        $contactus->delete();
        return back()->with('flash_success', 'Contact Us Deleted Successfully!');
    }

    public function reward()
    {
        $reward = Reward::all();
        return view('admin.reward.index',compact('reward'));
    }

}
