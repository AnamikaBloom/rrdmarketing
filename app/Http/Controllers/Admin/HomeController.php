<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reward;
use App\Models\WithdrawlRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Exception;
use Session;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $newRegistrations=User::get();
        $inactiveusers=User::where('status','Inactive')->get();
        $totalOrders=Order::whereNotNull('payment_id')->get();
        $reward=Reward::orderBy('id','desc')->limit(6)->get();
        $orders=Order::whereNotNull('payment_id')->limit(6)->get();
        $products=Product::limit(10)->get();
        return view('admin.index',compact('newRegistrations','inactiveusers','totalOrders','reward','orders','products'));
    }


    public function adminlogin()
    {
        return view('auth.login');
    }

    public function logins(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/');
        }
        return back()->with([
            'flash_error' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin-login')->with('flash_success', "Logout Successfully.");
    }



    public function about()
    {
        return view('admin.aboutus.index');
    }


    public function editbankdetails()
    {
        return view('admin.edit-bank-details');
    }

    public function forgot()
    {
        return view('admin.auth.forgot');
    }




    public function privacypolicy()
    {
        return view('admin.privacy-policy');
    }

    public function products()
    {
        return view('admin.products');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function reset()
    {
        return view('auth.reset');
    }



    public function termscondition()
    {
        return view('admin.terms-condition');
    }

    public function updatepackage()
    {
        return view('admin.update-package');
    }


}
