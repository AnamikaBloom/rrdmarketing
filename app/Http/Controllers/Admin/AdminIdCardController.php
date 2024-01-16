<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class AdminIdcardController extends Controller
{
    public function index()
    {
        $users = User::where('password','!=','')->paginate(15);
        return view('admin.idcard.id-card',compact('users'));
    }

    public function view($id)
    {

        $user = User::find($id);

        return view('admin.idcard.idcard-view',compact('user'));


    }
}