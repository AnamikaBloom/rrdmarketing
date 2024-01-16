<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RankManagement;
use App\Models\Repurchage;
use Illuminate\Http\Request;

class RepurchageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranks=RankManagement::where('status','1')->get();
        $repurchages = Repurchage::all();
        return view('admin.repurchage.index',compact('repurchages','ranks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ranks=RankManagement::where('status','1')->get();
        $repurchages = Repurchage::all();
        return view('admin.repurchage.index',compact('repurchages','ranks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'rank_id' => 'required',
            'reward_percentage' => 'required',
            'self_purchage_amount' => 'required',
            'team_purchage_amount' => 'required',
            'status' => 'required',
        ]);
        $repurchage=new Repurchage;
        $repurchage->rank_id=$request->rank_id;
        $repurchage->reward_percentage=$request->reward_percentage;
        $repurchage->self_purchage_amount=$request->self_purchage_amount;
        $repurchage->team_purchage_amount=$request->team_purchage_amount;
        $repurchage->status=$request->status;
        $repurchage->save();
        return redirect()->route('repurchage.index')->with('success','Repurchage Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repurchage  $repurchage
     * @return \Illuminate\Http\Response
     */
    public function show(Repurchage $repurchage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repurchage  $repurchage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repurchage=Repurchage::find($id);
        $ranks=RankManagement::where('status','1')->get();
        // dd($repurchage);
        return view('admin.repurchage.edit',compact('repurchage','ranks'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repurchage  $repurchage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'rank_id' => 'required',
            'reward_percentage' => 'required',
            'self_purchage_amount' => 'required',
            'team_purchage_amount' => 'required',
            'status' => 'required',
        ]);
        $repurchage=Repurchage::find($id);
        $repurchage->rank_id=$request->rank_id;
        $repurchage->reward_percentage=$request->reward_percentage;
        $repurchage->self_purchage_amount=$request->self_purchage_amount;
        $repurchage->team_purchage_amount=$request->team_purchage_amount;
        $repurchage->status=$request->status;
        $repurchage->save();
        return redirect()->route('repurchage.index')->with('success','Repurchage Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repurchage  $repurchage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repurchage $repurchage)
    {
        //
    }
}
