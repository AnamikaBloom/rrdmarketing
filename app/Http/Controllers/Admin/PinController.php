<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PinList;
use App\Models\Package;
use App\Models\Pin;

class PinController extends Controller
{
    public function index(){
        $pins = PinList::orderBy('created_at','DESC')->get();
        $packages = Package::all();
        return view('admin.pin-list',compact('pins','packages'));
    }
    public function save(Request $request){
        $package = Package::find($request->package_id);
        $pin_count = (PinList::count()+1);
        $pin_array_all = [];
        $package_type = $this->thousandsCurrencyFormat($package->amount);
        for($i=$request->count; $i>0; $i--){
            $pin_number = 'RRD'.$package_type.sprintf('%05d', $pin_count);
            $pin_number = strtoupper($pin_number);
            $pin_array['package_id'] = $request->package_id;
            $pin_array['package_amount'] = $package->amount;
            $pin_array['pin_number'] = $pin_number;
            $pin_array_all[] = $pin_array;
            $pin_count = ($pin_count + 1);
        }
        PinList::insert($pin_array_all);
        return back()->with('flash_success',$request->count.' PINs are Generated');
    }

    function thousandsCurrencyFormat($num) {

        if($num>1000) {
      
              $x = round($num);
              $x_number_format = number_format($x);
              $x_array = explode(',', $x_number_format);
              $x_parts = array('k', 'm', 'b', 't');
              $x_count_parts = count($x_array) - 1;
              $x_display = $x;
              $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
              $x_display .= $x_parts[$x_count_parts - 1];
      
              return $x_display;
      
        }
      
        return $num;
      }
    
}
