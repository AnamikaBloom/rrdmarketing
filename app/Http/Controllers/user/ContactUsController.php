<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\Contact;

class ContactUsController extends Controller
{

    public function index(){
        return view('pages.contact');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
    
        if($contact->save())
        return back()->with('flash_success','Enquiry Details Submitted');
    else
        return back();
    }
}
