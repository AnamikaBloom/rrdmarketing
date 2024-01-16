<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\ChildCategory;

class AjaxController extends Controller
{
    public function subCategory(Request $request){
        $id=$request->id;
		$html='<option value="">Select Sub Category</option>';
		$query=SubCategory::where('category_id',$id)->get();
        if(count($query)>0){
            // dd(($query));
            foreach($query as $q)
            {
            $html.='<option value="'.$q->id.'">'.$q->name.'</option>';
            }
            $data['status']=true;
            $data['html']=$html;
        }else{
            $data['status']=false;

        }




		return $data;
    }
    public function childCategory(Request $request){
        $id=$request->id;
        $category_id=$request->category_id;
		$html='<option value="">Select Child Category</option>';
		$query=ChildCategory::where(['category_id'=>$category_id,'subcategory_id'=>$id])->get();
		if(count($query)>0){
            foreach($query as $q)
            {
            $html.='<option value="'.$q->id.'">'.$q->name.'</option>';
            }
            $data['status']=true;
            $data['html']=$html;
        }else{
            $data['status']=false;

        }




		return $data;
    }
    public function size(Request $request){
        $id=$request->id;
        $html='<option value="">Select Size</option>';
		$query=Size::where(['childcategory_id'=>$id])->get();
        foreach($query as $q)
        {
        $html.='<option value="'.$q->id.'">'.$q->name.'</option>';
        }
        return $html;
    }
}
