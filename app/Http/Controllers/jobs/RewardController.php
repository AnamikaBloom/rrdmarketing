<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\User;
use App\Models\UserPackage;
use App\Models\Wallet;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index(){
        $users=User::all();
        foreach($users as $user){
           $team= $this->tree($user->member_id);
            // dd($team);
            $teams=User::whereIn('member_id',$team)->pluck('id')->toArray();
            $userPackage=UserPackage::whereIn('user_id',$teams)->pluck('user_id')->toArray();
            $activeUsers=User::whereIn('id',$userPackage)->get();
            foreach($activeUsers as $activeUser){
                $this->addReward($user->member_id,$activeUser->member_id);
            }
        }
    }
    public function addReward($sponser_id,$member_id){
        $sponser=User::where('member_id',$sponser_id)->first();
        if($sponser){
            $user=User::where('member_id',$member_id)->first();
            $description='Reward Added For '.$user->member_id .' to '.$sponser->member_id;
            // echo 'user '.$user->member_id.' <br>sponser '.$sponser->member_id.'<br> rank '.$sponser->rank.'<br>';

            $amount=$sponser->rank->rank_income;
            $reward=Reward::where(['user_id'=>$sponser->id,'child_id'=>$user->id,'description'=>$description,'amount'=>$amount])->first();
            if(!$reward){
                $reward=new Reward();
                $reward->user_id=$sponser->id;
                $reward->child_id=$user->id;
                $reward->description=$description;
                $reward->amount=$amount;
                $reward->save();
                $this->addToWallet($sponser->id,$amount);
            }
            // $this->addReward($sponser->sponser_id,$member_id);
        }

    }
    public function addToWallet($user_id,$amount){
        $wallet=Wallet::where('user_id',$user_id)->first();
        if($wallet){
            $wallet->amount+=$amount;
            $wallet->save();
        }else{
            $wallet=new Wallet();
            $wallet->user_id=$user_id;
            $wallet->amount=$amount;
            $wallet->status="Active";
            $wallet->save();

        }
    }
    public function tree($sponser_id)
    {
        $bc_id = $sponser_id;
        $child_array = array();

        $childs = User::where(['placement_id' => $sponser_id])->get();

        foreach ($childs as $child) {
            $child_array[] = $child->member_id;

            $child_array = array_merge($child_array, $this->child_node($child->member_id));
        }

        return ($child_array);
    }
    public function child_node($sponser_id)
    {

        // $bc_id = $sponser_id;
        // $sponser_id_array = [$bc_id];
        $child_array = array();
        $childs = User::where('placement_id', $sponser_id)->get();

        foreach ($childs as $key => $child) {


            $child_array[] = $child->member_id;

            $child_array = array_merge($child_array, $this->child_node($child->member_id));
        }

        return ($child_array);
    }
}
