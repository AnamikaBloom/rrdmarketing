<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\jobs\RewardController;
use App\Models\Reward;
use App\Models\User;
use App\Models\UserPackage;

class RoyaltyRewardController extends Controller
{
    public function index(){
        $users=User::where('member_id','A379221Y01')->get();
        foreach($users as $user){
            $rank=$user->rank_id;
            $minLegOnSameRank=$user->rank->minLegOnSameRank;
            $minTotalMembers=$user->rank->minTotalMembers;
            $royaltyRate=$user->rank->royalty_percentage/100;
            $sameRankLeg= ($this->sameRankLeg($user->member_id));
            $otherLegsMembers= ($this->otherLegsMembers($user->member_id,$sameRankLeg));
            if ($rank >= 2 && count($sameRankLeg) >= $minLegOnSameRank && count($otherLegsMembers) >= $minTotalMembers) {

                $childs=array_merge($sameRankLeg,$otherLegsMembers);
                $totalBusiness = $this->totalBusiness($user->member_id,$childs); // assume total business is 200000
            // dd($rank,count($sameRankLeg),$minLegOnSameRank,count($otherLegsMembers),$minTotalMembers,$royaltyRate,$totalBusiness);

                $royaltyIncome = $totalBusiness * $royaltyRate;
                $this->addRoyaltyReward($user->member_id,$royaltyIncome);

                echo "The royalty income for this member ".$user->name." is ". $royaltyIncome."<br>";
            } else {
                echo "This member does not qualify for royalty income.<br>";
            }

        }
    }
    public function addRoyaltyReward($sponser_id,$amount){
        $sponser=User::where('member_id',$sponser_id)->first();
            $description='Royalty Reward Added  to '.$sponser->member_id;

                $reward=new Reward();
                $reward->user_id=$sponser->id;
                $reward->description=$description;
                $reward->amount=$amount;
                $reward->save();

            // $this->addReward($sponser->sponser_id,$member_id);

    }
    public function otherLegsMembers($sponser_id,$sameRankLeg)
    {
        // dd($sameRankLeg);
        $child_array = array();

        $childs = User::where(['placement_id' => $sponser_id])
        ->whereNotIn('member_id',$sameRankLeg)
        ->get();
        // dd($childs,$sponser_id,$sameRankLeg);
        foreach ($childs as $child) {
            $child_array[] = $child->member_id;

            $child_array = array_merge($child_array, $this->child_node($child->member_id));
        }

        return ($child_array);
    }
    public function sameRankLeg($sponser_id)
    {

        $child_array = array();
        $sponser=User::where('member_id',$sponser_id)->first();
        $childs = User::where(['placement_id' => $sponser_id])->get();

        foreach ($childs as $child) {
            if($child->rank_id>=$sponser->rank_id){

                $child_array[] = $child->member_id;

                // $child_array = array_merge($child_array, $this->child_node($child->member_id));
            }

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
    public function totalBusiness($sponser_id,$childs){
        $sponser=User::where('member_id',$sponser_id)->first();
        if($sponser){
            $childs=User::whereIn('member_id',$childs)->pluck('id')->toArray();
            $amount=0;
            foreach($childs as $child){
                $userPackage=UserPackage::where('user_id',$child)->first();
                if($userPackage){
                   $amount=$amount+3500;
                }
            }
        }
        return $amount;
    }
}
