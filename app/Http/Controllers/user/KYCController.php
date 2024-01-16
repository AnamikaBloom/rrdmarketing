<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KycRequest;
use Image;
use Auth;

class KYCController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user=Auth::user();
        $kyc=KycRequest::where('user_id',$user->id)->where('status','Approved')->orderBy('id','desc')->first();
        $kycs=KycRequest::where('user_id',$user->id)->orderBy('id','desc')->get();
        return view('user.KYC.kycDetails',compact('kyc','kycs'));
    }

    public function create(){
        $user=Auth::user();
        $kyc=KycRequest::where('user_id',$user->id)->first();
        return view('user.KYC.KYC',compact('kyc'));
    }

    public function store(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'pan' => 'required',
            'aadhar_front' => 'required',
            'aadhar_back' => 'required',
            'cheq_passbook' => 'required'
        ],[
			'pan.required' => 'PAN Image is required',
			'aadhar_front.required' => 'Aadhar Front Image is required',
			'aadhar_back.required' => 'Aadhar Back Image is required',
			'cheq_passbook.required' => 'Cancel Cheque Or Bank PassBook Front Page Image is required',

		]);
        $user_id=Auth::user()->id;
        $kyc_request = new KycRequest;

        if ($request->hasfile('pan')) {

           $image = $request->file('pan');
           $panImage ='pan-'.time().'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('storage/pan/');
           $img = Image::make($image->getRealPath());
           $img->resize(100, 100, function ($constraint) {
               $constraint->aspectRatio();
           })->save($destinationPath.'/'.$panImage);

           $destinationPath = public_path('storage/pan/');
           $image->move($destinationPath, $panImage);
            $kyc_request->pan = $panImage;
        }
        if ($request->hasfile('aadhar_front')) {
            $image = $request->file('aadhar_front');
           $aadhar_front = 'aadhar_front-'.time().'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('storage/aadhar/');
           $img = Image::make($image->getRealPath());
           $img->resize(100, 100, function ($constraint) {
               $constraint->aspectRatio();
           })->save($destinationPath.'/'.$aadhar_front);

           $destinationPath = public_path('storage/aadhar/');
           $image->move($destinationPath, $aadhar_front);
            $kyc_request->aadhar_front = $aadhar_front;
        }
        if ($request->hasfile('aadhar_back')) {
            $image = $request->file('aadhar_back');
           $aadhar_back = 'aadhar_back-'.time().'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('storage/aadhar/');
           $img = Image::make($image->getRealPath());
           $img->resize(100, 100, function ($constraint) {
               $constraint->aspectRatio();
           })->save($destinationPath.'/'.$aadhar_back);

           $destinationPath = public_path('storage/aadhar/');
           $image->move($destinationPath, $aadhar_back);
            $kyc_request->aadhar_back = $aadhar_back;
        }
        if ($request->hasfile('cheq_passbook')) {
            $image = $request->file('cheq_passbook');
            $bankImage = 'bank-'.time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('storage/bank/');
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$bankImage);

            $destinationPath = public_path('storage/bank/');
            $image->move($destinationPath, $bankImage);
            $kyc_request->cheq_passbook = $bankImage;
        }

        $kyc_request->user_id = $user_id;
        $kyc_request->request_no = 'KYCR'.date("dmy").rand(100,999);
        $kyc_request->save();
        return redirect()->route('user-kyc')->with('success','KYC Request Added Successfully');
    }


    public function update(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'pan' => 'required',
            'aadhar_front' => 'required',
            'aadhar_back' => 'required',
            'cheq_passbook' => 'required'
        ],[
			'pan.required' => 'PAN Image is required',
			'aadhar_front.required' => 'Aadhar Front Image is required',
			'aadhar_back.required' => 'Aadhar Back Image is required',
			'cheq_passbook.required' => 'Cancel Cheque Or Bank PassBook Front Page Image is required',

		]);
        $user_id=Auth::user()->id;
        $kyc_request = new KycRequest;

        if ($request->hasfile('pan')) {

           $image = $request->file('pan');
           $panImage ='pan-'.time().'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('storage/pan/');
           $img = Image::make($image->getRealPath());
           $img->resize(100, 100, function ($constraint) {
               $constraint->aspectRatio();
           })->save($destinationPath.'/'.$panImage);

           $destinationPath = public_path('storage/pan/');
           $image->move($destinationPath, $panImage);
            $kyc_request->pan = $panImage;
        }
        if ($request->hasfile('aadhar_front')) {
            $image = $request->file('aadhar_front');
           $aadhar_front = 'aadhar_front-'.time().'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('storage/aadhar/');
           $img = Image::make($image->getRealPath());
           $img->resize(100, 100, function ($constraint) {
               $constraint->aspectRatio();
           })->save($destinationPath.'/'.$aadhar_front);

           $destinationPath = public_path('storage/aadhar/');
           $image->move($destinationPath, $aadhar_front);
            $kyc_request->aadhar_front = $aadhar_front;
        }
        if ($request->hasfile('aadhar_back')) {
            $image = $request->file('aadhar_back');
           $aadhar_back = 'aadhar_back-'.time().'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('storage/aadhar/');
           $img = Image::make($image->getRealPath());
           $img->resize(100, 100, function ($constraint) {
               $constraint->aspectRatio();
           })->save($destinationPath.'/'.$aadhar_back);

           $destinationPath = public_path('storage/aadhar/');
           $image->move($destinationPath, $aadhar_back);
            $kyc_request->aadhar_back = $aadhar_back;
        }
        if ($request->hasfile('cheq_passbook')) {
            $image = $request->file('cheq_passbook');
            $bankImage = 'bank-'.time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('storage/bank/');
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$bankImage);

            $destinationPath = public_path('storage/bank/');
            $image->move($destinationPath, $bankImage);
            $kyc_request->cheq_passbook = $bankImage;
        }

        $kyc_request->user_id = $user_id;
        $kyc_request->request_no = 'KYCR'.date("dmy").rand(100,999);
        $kyc_request->save();
        return redirect()->route('kyc')->with('success','KYC Request Added Successfully');

    }
}
