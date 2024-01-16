<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AwardReward;

class AwardsRewardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = AwardReward::where('user_id', \Auth::user()->id)->get();
        return view('user.awards_and_rewards',compact('data'));
    }
}
