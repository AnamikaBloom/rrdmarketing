<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MywishlistController extends Controller
{

    public function myWishlist(){

        return view('user.my-wishlist');
    }
}
