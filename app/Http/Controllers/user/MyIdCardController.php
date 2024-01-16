<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class MyIdCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function idCard(){
        $user = Auth::user();
        $user = User::find($user->id);
        return view('user.idcard.id-card',compact('user'));
    }
}
