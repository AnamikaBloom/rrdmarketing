<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderList;
use App\Models\State;
use App\Models\User;
use App\Models\UserPackage;
use Illuminate\Support\Facades\Session;
use Auth;

class CartController extends Controller
{
    public function cart(){
        if (Auth::user())
    {
        $cart_counter = Cart::where('user_id',Auth::user()->id)->count('id');
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $subtotal_cart = [];

    }

    else{
        $cart_counter = Cart::where('session_id',Session::getId())->count('id');
        $carts = Cart::where('session_id',Session::getId())->get();
        $subtotal_cart = [];

    }
        return view('listing.cart',compact('carts','subtotal_cart'));
    }
    public function checkoutpage(){
        return view('listing.checkout');
    }

    public function addToCart(Request $request)
    {
        // dd($request->all());
        if (!Auth::check()){
            return response()->json(['status'=>false,'message'=>'Login First'],201);
        }
        if($request->type){
            $cart = Cart::where('session_id', Session::getId())
            ->where(['product_id'=>$request->product_id,'color_id'=>$request->color,'size_id'=>$request->size,'type'=>'RP'])
            ->first();
        }else{
            $cart = Cart::where('session_id', Session::getId())
            ->where(['product_id'=>$request->product_id,'color_id'=>$request->color,'size_id'=>$request->size])
            ->first();
        }


        if ($cart) {
            // $cart->quantity = $cart->quantity+1;
            $cart->quantity = $cart->quantity + $request->pno;
        }

        else
        {
            $cart = new Cart;
            $cart->session_id = Session::getId();
            if (!Auth::check())
            {
                $cart->user_id = null;
            }
            else
            {
                $cart->user_id = Auth::user()->id;
            }
            $cart->product_id = $request->product_id;
            $cart->color_id = $request->color;
            $cart->size_id = $request->size;
            // $cart->quantity = 1;
            $cart->quantity = $request->pno;
            if($request->type){
            $cart->type = 'RP';

            }
        }
        $cart->save();
        // dd($cart);
        return response()->json(['status'=>true,'message'=>'add to cart Successfully.'],200);
        // return back()->with('flash_success', "add to cart Successfully.");
    }
    public function increaseCartQuantity(Request $request, $id, $session_id)
    {
        if (Auth::user()) {
            $cart = Cart::where('user_id', $session_id)->where('id', $id)->first();
        }
        else{
            $cart = Cart::where('session_id', $session_id)->where('id', $id)->first();
        }

        if ($cart) {
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
            return back()->with('flash_success', 'Cart Updated');
        } else {
            abort(404);
        }
    }
    public function decreaseCartQuantity(Request $request, $id, $session_id)
    {

        if (Auth::user()) {
            $cart = Cart::where('user_id', $session_id)->where('id', $id)->first();
        }
        else{
            $cart = Cart::where('session_id', $session_id)->where('id', $id)->first();
        }

        if ($cart) {
            if (Auth::user()) {
                $cart_arrs = Cart::where('user_id',$session_id)->get();

            }else{
                $cart_arrs = Cart::where('session_id', Session::getId())->get();
            }
            foreach ($cart_arrs as $cart_arr) {
                echo($cart_arr->product->selling_price);

                $subtotal[] = $cart_arr->product->selling_price * $cart_arr->quantity;
                echo($cart_arr);
            }
            if ($cart->quantity == 1) {
                $cart->delete();
                return back();
            } else {
                $cart->quantity = $cart->quantity - 1;
                $cart->save();
            }
            return back()->with('flash_success', 'Cart Updated');
        } else {
            abort(404);
        }
    }
    public function deleteCartQuantity(Request $request, $id, $session_id)
    {
        $user = Auth::user();
        $cart = Cart::where('session_id', $session_id)->where('id', $id)->first();
        if ($cart) {
            $cart->delete();
            return back()->with('flash_success', 'Cart Updated');
        } else {
            abort(404);
        }
    }
    public function showCheckout(){



        $states=State::all();
        if(Auth::user()){
            $active_pacakge=UserPackage::where('user_id',Auth::user()->id)->where('product_order_status','0')->first();
            if(!$active_pacakge){

                return redirect()->route('user-package');

            }else{
                if (Auth::user())
                {
                    $user=Auth::user();

                    $cart_counter = Cart::where('user_id',Auth::user()->id)->count('id');
                    $carts = Cart::where('user_id',Auth::user()->id)->get();
                    $subtotal_cart = [];

                }

                else{
                    $user='';
                    $cart_counter = Cart::where('session_id',Session::getId())->count('id');
                    $carts = Cart::where('session_id',Session::getId())->get();
                    $subtotal_cart = [];

                }
                return view('listing.checkout',compact('carts','subtotal_cart','states','user','active_pacakge'));
            }
        }else{
            return redirect()->route('login');
        }
            }
            public function checkOut(Request $request){
                // dd($request->all());
                if (Auth::check()) {
                    // dd('1234');


                    $user = User::find(Auth::user()->id);
                    $getlastId = Order::orderBy('id', 'desc')->first();
                    $session_id = Session::getId();
                    $carts = Cart::where('user_id', $user->id)->get();
                    $getCart = Cart::where('user_id', $user->id)->first();
                    if ($getCart) {
                        if ($getlastId) {
                            $order_id = "ADI" . time() . $getlastId->id;
                        } else {
                            $order_id = "ADI" . time() . "1";
                        }
                        foreach ($carts as $cart) {
                            $subtotal[] = $cart->product->selling_price * $cart->quantity;
                        }
                        $active_pacakge=UserPackage::where('user_id',$user->id)
                        ->where('product_order_status','0')->first();
                    //    dd($active_pacakge);

                        $order = new Order;
                        $order->order_id = $order_id;
                        $order->user_id = $user->id;
                        $order->payment_id = uniqid();
                        $order->razorpay_order_id = $active_pacakge->payment_id;
                        $order->product_price = array_sum($subtotal);
                        $order->order_price = array_sum($subtotal);
                        $order->payable_price = array_sum($subtotal);
                        $order->status = "OrderPlaced";
                        $order->payment_type = "online";
                        $order->name = $request->name;
                        $order->email = $request->email;
                        $order->phone = $request->phone;
                        $order->state = $request->state;
                        $order->city = $request->city;
                        $order->pincode = $request->pincode;
                        $order->address = $request->street.' '.$request->landmark;
                        $order->status = 'Order Placed';
                        $order->save();
                        foreach ($carts as $cart) {
                            $orderList = new OrderList();
                            $orderList->order_id = $order->id;
                            $orderList->product_id = $cart->product_id;
                            $orderList->colors = $cart->colors;
                            $orderList->sizes = $cart->sizes;
                            // $orderList->mrp_price = $cart->product->price;
                            $orderList->selling_price = $cart->product->selling_price;
                            $orderList->quantity = $cart->quantity;
                            $orderList->save();
                        }

                    return redirect()->route('order-placed', ['order_id' => $order->order_id]);


                    }else {
                            return redirect()->back()->with('error', 'no items in cart');
                        }


                } else {
                    return redirect()->route('login');
                }
            }
            public function orderPlaced(Request $request)
    {
        $title = "Thank You | VOW Richuals Marketing Pvt. Ltd.";
        $desc = "Thank You | VOW Richuals Marketing Pvt. Ltd.";

        if ($request->order_id) {
            $order = Order::where('order_id', $request->order_id)->first();
          //  dd($order->razorpay_order_id);
           // Helper::reward($order->user_id,$order->payable_price);
            $userPackage=UserPackage::where('payment_id',$order->razorpay_order_id)->first();
            $userPackage->product_order_status='1';
            $userPackage->save();
            $lists = OrderList::where('order_id', $order->id)->get();
            if (Auth::user()) {
                $carts = Cart::where('user_id',Auth::user()->id)->get();

            }else{
                $carts = Cart::where('session_id', Session::getId())->get();
            }
            foreach($carts as $cart){
                $cart->delete();
            }


            return view("pages.thankyou", compact('order', 'lists'));
        } else {
            return back()->with('error', 'No Product Purchased');
        }
    }
        }



