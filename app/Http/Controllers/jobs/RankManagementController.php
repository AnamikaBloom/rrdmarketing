<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use App\Models\RankManagement;
use App\Models\User;
use App\Models\UserPackage;
use Illuminate\Http\Request;

class RankManagementController extends Controller
{
    public function index(){
        $users=User::all();
        // $users=User::where('member_id','A935401Y01')->get();
        foreach($users as $user){
            // dd($user);
            $team_count=$this->tree($user->member_id);
            // dd(count($team_count));
            $active_users=User::whereIn('member_id',$team_count)->where('rank_id','>','1')->get();

            if(count($active_users)>0){
            // dd(count($team_count));
              //  dd(($active_users));
                $rank=RankManagement::where('team','>=',count($active_users))
                // ->where('team','>=',count($team_count))
                ->first();
            // dd(($rank));

                if($rank){
                    echo '<br>user name:'.$user->name.'<br>Team Count '.count($active_users) .' <br>user '.$user->member_id.' <br> rank '.$rank->id.'<br>';

                    $user->rank_id=$rank->id;
                    // $user->save();
                }
            }
            else{
                if(!$user->rank_id>2){
                    $rank = RankManagement::where('team', count($active_users))
                    ->first();
                    $user->rank_id = $rank->id;

                }
            }
            $user->save();

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
