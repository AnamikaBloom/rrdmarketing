<?php

namespace App\Http\Controllers\user;

use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderList;
use App\Models\Product;
use App\Models\RepurchageOrder;
use App\Models\RepurchageOrderList;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use Softon\Indipay\Facades\Indipay;

class ProductController extends Controller
{
    public function products(){
        $products=Product::orderBy('id','desc')->where('status','Active')->paginate(10);

        return view('user.products',compact('products'));
    }

    public function productDetails($slug){
        $product=Product::whereSlug($slug)->first();

        return view('user.product-details',compact('product'));
    }
    public function repurchageCart(){
        $user=Auth::user();
        $carts=Cart::where(['user_id'=>$user->id,'type'=>'RP'])->get();
        return view('user.shop-cart',compact('carts'));

    }
    public function checkOut(Request $request){
        // dd($request->all());
        if (Auth::check()) {
            // dd('1234');


            $user = User::find(Auth::user()->id);
            $getlastId = RepurchageOrder::orderBy('id', 'desc')->first();
            $session_id = Session::getId();
            $carts=Cart::where(['user_id'=>$user->id,'type'=>'RP'])->get();

            $getCart = Cart::where(['user_id'=>$user->id,'type'=>'RP'])->first();
            if ($getCart) {
                if ($getlastId) {
                    $order_id = "ADIR" . time() . $getlastId->id;
                } else {
                    $order_id = "ADIR" . time() . "1";
                }
                foreach ($carts as $cart) {
                    $subtotal[] = $cart->product->selling_price * $cart->quantity;
                }
                $txnid = uniqid();

                $order = new RepurchageOrder();
                $order->order_id = $order_id;
                $order->user_id = $user->id;
                $order->txn_id = $txnid;
                $order->order_price = array_sum($subtotal);
                $order->payable_price = array_sum($subtotal);
                $order->status = "Placed";
                $order->payment_type = "Online";
                $order->save();
                foreach ($carts as $cart) {
                    $orderList = new RepurchageOrderList();
                    $orderList->repurchage_order_id = $order->id;
                    $orderList->product_id = $cart->product_id;
                    // $orderList->product_size = $cart->sizes;
                    $orderList->selling_price = $cart->product->selling_price;
                    $orderList->quantity = $cart->quantity;
                    $orderList->save();
                }
                $email = $user->email;
                $phone = $user->mobile;
                $amount = array_sum($subtotal);

                $parameters=[ 'purpose' => $order_id,
                'amount' => $amount,
                'buyer_name' => $user->name,
                'email' => $email,
                'phone' => $phone,];

                $order = Indipay::prepare($parameters);


                return Indipay::process($order);

            }else {
                    return redirect()->back()->with('error', 'no items in cart');
                }


        } else {
            return redirect()->route('login');
        }
    }
    public function orderPlaced(Request $request){
        if ($request->order_id) {
            $order = RepurchageOrder::where('order_id', $request->order_id)->first();
            $orderLists=RepurchageOrderList::where('repurchage_order_id',$order->id)->get();
            return view("user.repurchage-thankyou", compact('order','orderLists'));
        } else {
            return back()->with('error', 'No Package Purchased');
        }
    }
}
