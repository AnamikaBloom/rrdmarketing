<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RankManagement;
use Illuminate\Http\Request;

class AdminRankController extends Controller
{
    public function index()
    {
        $ranks = RankManagement::all();
        return view('admin.rank.rank', compact('ranks'));
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'team' => 'required',
            'rank_income'  => 'required',
            'royalty'  => 'required',
            'status' =>  'required',
            'minLegOnSameRank' =>  'required',
            'minTotalMembers' =>  'required',
        ]);

        $slug = str_replace(' ', '-', strtolower($request->name));
        if (RankManagement::where('slug', '=', $slug)->count() > 0) {
            return back()->with('flash_error', 'Rank Already Exits');
        } else {
            $rank = new RankManagement();
            $rank->name = $request->name;
            $rank->slug = $slug;
            $rank->team = $request->team;
            $rank->rank_income = $request->rank_income;
            $rank->royalty_percentage = $request->royalty;
            $rank->minLegOnSameRank = $request->minLegOnSameRank;
            $rank->minTotalMembers = $request->minTotalMembers;
            $rank->status = $request->status;
            $rank->save();
            return redirect()->back()->with('flash_success', "Rank Added successfully");
        }
    }
    public function edit($slug)
    {
        $ranks = RankManagement::where('slug', $slug)->first();
        return view('admin.rank.ranEdit', compact('ranks'));
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'team' => 'required',
            'rank_income'  => 'required',
            'royalty'  => 'required',
            'status' =>  'required',
            'minLegOnSameRank' =>  'required',
            'minTotalMembers' =>  'required',
        ]);
        $rank = RankManagement::find($request->id);
        $rank->name = $request->name;
        $rank->slug = str_replace(' ', '-', strtolower($request->name));
        $rank->team = $request->team;
        $rank->rank_income = $request->rank_income;
        $rank->royalty_percentage = $request->royalty;
        $rank->minLegOnSameRank = $request->minLegOnSameRank;
        $rank->minTotalMembers = $request->minTotalMembers;
        $rank->status = $request->status;
        $rank->save();
        return redirect()->route('admin-rank')->with('flash_success', "Rank Updated successfully");
    }

    public function delete($id){
        $rank = RankManagement::find($id)->delete();
        return redirect()->route('admin-rank')->with('flash_success', "Rank Deleted successfully");


    }
}
