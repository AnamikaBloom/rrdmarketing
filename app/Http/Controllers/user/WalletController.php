<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletRequest;
use Auth;
use Str;
use Validator;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function wallet(){
        $user= Auth::User();
        $wallet = Wallet::where('user_id',$user->id)->first();
        return view('user.wallet',compact('wallet','user'));
    }

    public function walletrequest(Request $request){

        $validator = Validator::make($request->all(), [
            'request_amount' => 'required|numeric',
			'comment' => 'required|max:200',
		], [
			'request_amount.required' 	=> 'Amount field is required.',
			'request_amount.numeric' 	=> 'Only numbers are allowed for amount field.',
			'comment.required' => 'Comment field is required.',
			'comment.max' => 'Maximum 200 characters allowed for comment.',
		]);

		$wallet = false;

		$validator->after(function ($validator) use ($request) {

			$wallet = Wallet::where('user_id',$request->id)->first();

			if ($wallet == null) {
				$validator->errors()->add('error', 'Wallet not found.');
			}
			if ($wallet->amount < $request->request_amount) {
				$validator->errors()->add('error', 'Amount should not be greater than Wallet Balance.');
			}
		});

		if ($validator->fails()) {
			return response()->json([
				'success' => false, 
				'message' => $validator->errors()->first()
			], 200);
        }
        
        // dd($request->all());

        $wallet= new WalletRequest;
        $transaction_id ='ADYGWR'. Str::random(8);
        $wallet->transaction_id= $transaction_id;
        $wallet->user_id = $request->id;
        $wallet->amount= $request->request_amount;
        $wallet->charges= '0';
        $wallet->total_amount= $request->request_amount;
        $wallet->Active= '0';
        $wallet->reasons= $request->comment;
        $wallet->save();

        $data = Wallet::where('user_id',$request->id)->first();

        if ($data) {
            $updatedAmount = $data->amount - $request->request_amount;
            $data->amount = $updatedAmount;
            $data->save();
        }


        // return back();
        return response()->json([
            'success' => true, 
            'message' => 'Requested Successfully.'
        ], 200);
    }
}