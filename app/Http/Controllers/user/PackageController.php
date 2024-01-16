<?php

namespace App\Http\Controllers\user;

use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Package;
use App\Models\RankManagement;
use App\Models\RepurchageOrder;
use App\Models\Reward;
use App\Models\User;
use App\Models\UserPackage;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Softon\Indipay\Facades\Indipay;

class PackageController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(Request $request)
    {
        $packages = Package::where('status','1')->get();
        if($request->segment(1)=='package-list'){
            return view('pages.packages', compact('packages'));
        }else{
            return view('user.package', compact('packages'));
        }
    }
    public function buyPackage(Request $request)
    {
        $user = Auth::user();
        if ($user->state_id == '' || $user->city_id == '' || $user->district == '' || $user->pincode = '' || $user->house_no == '' || $user->street == '' || $user->landmark == '') {
            return redirect()->route('profile');
        } else {
            $getlastId = UserPackage::where('user_id', $user->id)->orderBy('id', 'desc')->first();
            if ($getlastId) {
                $order_id = "AYSPL_" . time() . $getlastId->id;
            } else {
                $order_id = "AYSPL_" . time() . "1";
            }
            // dd($request->all());
            $txnid = uniqid();
            $email = $user->email;
            $phone = $user->mobile;
            $amount = $request->amount;

            $userPackage = new UserPackage();
            $userPackage->user_id = $user->id;
            $userPackage->package_id = $request->package_id;
            $userPackage->order_id = $order_id;
            $userPackage->amount = $request->amount;
            $userPackage->payment_type = 'Online';
            $userPackage->txn_id = $txnid;
            $userPackage->save();
            $parameters = [
                'purpose' => $order_id,
                'amount' => $amount,
                'buyer_name' => $user->name,
                'email' => $email,
                'phone' => $phone,
            ];
            $validator = Validator::make($parameters, [
                'purpose' => 'required|max:30',
                'amount' => 'required|numeric|between:9,200000',
                'buyer_name' => 'max:100',
                'email' => 'email|max:75',
                'phone' => 'digits:10',
            ]);
           // dd($parameters);
            if($validator->fails()){
                $errors = $validator->errors();
            $purposeError = $errors->first('purpose');
            $amountError = $errors->first('amount');
            $buyerNameError = $errors->first('buyer_name');
            $emailError = $errors->first('email');
            $phoneError = $errors->first('phone');
            if($buyerNameError || $emailError || $phoneError){
                return redirect()->route('user-profile')->with('errors',$errors);
            }

        }
            $order = Indipay::prepare($parameters);


            return Indipay::process($order);
            // dd($order_id,$firstName,$phone,$email,$amount);


        }
    }
    public function response(Request $request)
    {
        $response = Indipay::response($request);
        // dd($response);
        $order_id = $response->payment_request->purpose;
        // dd($order_id);
        if ($response->success && $response->payment_request->status == 'Completed') {
            // dd($response);

            $order = UserPackage::where('order_id', $order_id)->first();
            if ($order) {
                // $order->order_status= 'Order Placed';
                $order->payment_request_id = $response->payment_request->id;
                $order->payment_id = $response->payment_request->payment->payment_id;
                $order->payment_status = $response->payment_request->payment->status;
                $order->currency = $response->payment_request->payment->currency;
                $order->fees = $response->payment_request->payment->fees;
                $order->payment_request = $response->payment_request->payment->payment_request;
                $order->instrument_type = $response->payment_request->payment->instrument_type;
                $order->billing_instrument = $response->payment_request->payment->billing_instrument;
                $order->tax_invoice_id = $response->payment_request->payment->tax_invoice_id;
                $order->failure = $response->payment_request->payment->failure;
                // $order->payout = $response->payment_request->payment->payout;
                $order->affiliate_commission = $response->payment_request->payment->affiliate_commission;
                $order->payment_created_at = date('Y-m-d h:i:s', strtotime($response->payment_request->payment->created_at));
                // dd($order);
                $order->save();

                $user = User::find($order->user_id);
                $user->status = 'Active';

                $user->rank_id = 2;
                $user->save();
                // $this->rankupdate($user->sponser_id);
                Helper::calculateRewards($user->id,$user->member_id,$order->package_id);
                // $this->addReward($user->sponser_id, $user->member_id,$user->member_id,$order->package_id);
                Auth::login($user);
                // return true;

                //Transaction Successful
                return redirect()->route('package-order-placed', ['order_id' => $order->order_id]);
            } else {
                $order = RepurchageOrder::where('order_id', $order_id)->first();
                $order->payment_request_id = $response->payment_request->id;
                $order->payment_id = $response->payment_request->payment->payment_id;
                $order->payment_status = $response->payment_request->payment->status;
                $order->currency = $response->payment_request->payment->currency;
                $order->fees = $response->payment_request->payment->fees;
                $order->payment_request = $response->payment_request->payment->payment_request;
                $order->instrument_type = $response->payment_request->payment->instrument_type;
                $order->billing_instrument = $response->payment_request->payment->billing_instrument;
                $order->tax_invoice_id = $response->payment_request->payment->tax_invoice_id;
                $order->failure = $response->payment_request->payment->failure;
                $order->payout = $response->payment_request->payment->payout;
                $order->affiliate_commission = $response->payment_request->payment->affiliate_commission;
                $order->payment_created_at = date('Y-m-d h:i:s', strtotime($response->payment_request->payment->created_at));
                $order->save();

                $user = User::find($order->user_id);
                $month = date('m');
                $year = date('Y');
                $order = RepurchageOrder::where('order_id', $order_id)->first();
                $order->product_order_status = '1';
                // dd($order);
                Helper::calculateRepurchaseRewards($user->id, $order->order_id, $month, $year);
                Auth::login($user);
                $order->save();
                $carts = Cart::where('user_id', $order->user_id)->get();
                // dd($carts);
                foreach ($carts as $cart) {
                    $delete_cart = Cart::find($cart->id);
                    $delete_cart->product->stock = $delete_cart->product->stock - $delete_cart->quantity;
                    $delete_cart->delete();
                }
                // return true;

                //Transaction Successful
                return redirect()->route('repurchage-order-placed', ['order_id' => $order->order_id]);
            }
        } else {
            return redirect(route('repurchage-order-placed', ['order_id' => $order_id]))->with(['message'=> "Your payment is failed."]);
        }
    }
    public function orderPlaced(Request $request)
    {
        $title = "Thank You | Aadhiyogi  Pvt. Ltd.";
        $desc = "Thank You | Aadhiyogi Pvt. Ltd.";

        if ($request->order_id) {
            $order = UserPackage::where('order_id', $request->order_id)->first();
            return view("user.thankyou", compact('order'));
        } else {
            return back()->with('error', 'No Package Purchased');
        }
    }
    public function addReward($sponser_id, $member_id,$purchasing_user,$package_id ,$level = 1)
    {
        $upline = User::where('member_id', $sponser_id)->first();
        $package=Package::find($package_id);
        // echo '<br>upline: '.$upline->member_id.'<br>';
        if ($upline) {
            $user = User::where('member_id', $member_id)->first();
            // $sponser=User::where('member_id', $user->sponser_id)->first();
            $description = 'Reward Added For ' . $user->member_id . ' to ' . $purchasing_user . ' for Level ' . $level;
            $amount = $upline->rank->rank_income;
            if ($level == 1) {
                $reward = Reward::where(['user_id' => $upline->id, 'child_id' => $user->id, 'description' => $description, 'amount' => $amount])->first();
                echo 'user id: ' . $user->id;
                if (!$reward) {
                    $reward = new Reward();
                    $reward->user_id = $upline->id;
                    $reward->child_id = $user->id;
                    $reward->description = $description;
                    $reward->amount = $amount;
                    $reward->save();
                    $this->addToWallet($upline->id, $amount);
                }
                // $this->addReward($upline->sponser_id, $member_id);

            } elseif ($upline->rank_id > $user->rank_id) {
                $reward = Reward::where(['user_id' => $upline->id, 'child_id' => $user->id, 'description' => $description, 'amount' => $amount])->first();
                echo '<br> upline rank_id: ' . $upline->id . '<br>';

                if (!$reward) {
                    $reward = new Reward();
                    $reward->user_id = $upline->id;
                    $reward->child_id = $user->id;
                    $reward->description = $description;
                    $reward->amount = $amount;
                    $reward->save();
                    $this->addToWallet($upline->id, $amount);
                }
                // $this->addReward($upline->sponser_id, $member_id);
            }
            $level++;
            $this->addReward($upline->sponser_id, $upline->member_id,$purchasing_user, $level);
        }
    }
    public function addToWallet($user_id, $amount)
    {
        $wallet = Wallet::where('user_id', $user_id)->first();
        if ($wallet) {
            $wallet->amount += $amount;
            $wallet->save();
        } else {
            $wallet = new Wallet();
            $wallet->user_id = $user_id;
            $wallet->amount = $amount;
            $wallet->status = "Active";
            $wallet->save();
        }
    }
    public function rankupdate()
    {
        $users = User::get();
        foreach ($users as $user) {
            if ($user->status == 'Active') {
                $team_count = $this->tree($user->member_id);
                // dd(count($team_count));
            $active_users=User::whereIn('member_id',$team_count)->where('rank_id','>','1')->get();

                if (count($active_users) > 0) {
                    // dd(count($team_count));

                    $rank = RankManagement::where('team', '>=', count($active_users))
                        // ->where('team','>=',count($team_count))
                        ->first();
                    //dd(($rank));

                    if ($rank) {
                    echo '<br>user name:'.$user->name.'<br>Team Count '.count($active_users) .' <br>user '.$user->member_id.' <br> rank '.$rank->id.'<br>';
                        $user->rank_id = $rank->id;
                    }
                }else{
                    if(!$user->rank_id>2){
                        $rank = RankManagement::where('team', count($active_users))
                        ->first();
                        $user->rank_id = $rank->id;

                    }

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
        $child_array = array();
        $childs = User::where('placement_id', $sponser_id)->get();

        foreach ($childs as $key => $child) {


            $child_array[] = $child->member_id;

            $child_array = array_merge($child_array, $this->child_node($child->member_id));
        }

        return ($child_array);
    }
}
