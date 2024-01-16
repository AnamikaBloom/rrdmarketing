<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\Models\AboutUs;
use App\Models\Testimonial;
use App\Models\SubCategory;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\City;
use App\Models\Privacy;
use App\Models\Refund;
use App\Models\State;
use App\Models\Terms;
use App\Models\Faq;
use App\Models\GrievanceRedressals;

class WelcomeController extends Controller
{
    public function index()
    {
        $about=AboutUs::Where('status','Active')->first();
        $blogs=Blog::Where('status','Active')->orderBy('id','desc')->limit(6)->get();
        $latestproducts=Product::Where('type','Latest')->where('status','Active')->orderBy('id','desc')->limit(10)->get();
        $bestproducts=Product::Where('type','BestSeller')->where('status','Active')->orderBy('id','desc')->limit(10)->get();
        $featuredproducts=Product::Where('featured','Yes')->where('status','Active')->orderBy('id','desc')->limit(10)->get();
        $testmonials= Testimonial::where('status','active')->orderBy('id','desc')->limit(5)->get();
        $banners= banner::Where('status','Active')->orderBy('id','desc')->limit(3)->get();
        // dd($banners);
        return view('welcome',compact('testmonials','latestproducts','bestproducts','featuredproducts','banners','about','blogs'));
    }

    // public function about()
    // {
    //     return view('pages.about');
    // }

    public function service()
    {
        return view('listing.service');
    }
    public function blog()
    {
        return view('listing.blog');
    }
    public function blogdetails($slug)
    {
        $blog=Blog::whereSlug($slug)->first();
        return view('listing.blog-details',compact('blog'));
    }
    public function product(Request $request){

    $products=Product::Where('status','Active');
    if($request->filter){
        //dd($request->filter);
        if($request->filter=='latest'||$request->filter=='recent' ){
            $products=$products->orderBy('id','desc');
        }if($request->filter=='popular'){
            $products=$products->orderBy('id','desc')->where('type','BestSeller');
        }
    }
    $products=$products->get();
    $toprated=Product::Where('top_rated','Yes')->limit(3)->get();

        return view('listing.products',compact('products','toprated'));
    }
    public function subcategoryproduct($slug,Request $request){
        $subcategory= SubCategory::where('slug',$slug)->first();
        $products=Product::Where('subcategory_id',$subcategory->id);

        // dd($subcategory);
        if($request->filter){
            //dd($request->filter);
            if($request->filter=='latest'||$request->filter=='recent' ){
                $products=$products->orderBy('id','desc');
            }if($request->filter=='popular'){
                $products=$products->orderBy('id','desc')->where('type','BestSeller','toprated');
            }
        }
        $products=$products->get();
        $toprated=Product::Where('top_rated','Yes')->limit(3)->get();
        // dd(toprated);

            return view('listing.products',compact('products','toprated'));
    }
    public function productdetails($slug){

        $product = Product::where('slug',$slug)->first();
        // dd($product);
        $color=explode('#',$product->colors);
        $size=explode('#',$product->sizes);
        $colors=Color::whereIn('id',$color)->get();
        $sizes=Size::whereIn('id',$size)->get();
        // dd($sizes);

    // dd($colors)
        return view('listing.product-details',compact('product','colors','sizes'));
    }
    public function gallery()
    {
        return view('listing.gallery');
    }

    public function faq()
    {
        $faqs=Faq::All();
        return view('pages.faq',compact('faqs'));
    }

    public function privacy()

    {
     $privacy=Privacy::Where('status','1')->first();
        return view('pages.privacy-policy',compact('privacy'));
    }
    public function GrievanceRedressals()

    {
       $grievanceredressals=GrievanceRedressals::Where('status','1')->first();
        return view('pages.grievanceredressals',compact('grievanceredressals'));
    }

    public function refund()

    {
        $refund=Refund::Where('status','1')->first();
        return view('pages.refund-policy',compact('refund'));
    }

    public function terms()
    {
        $terms=Terms::Where('status','1')->first();
        return view('pages.terms-condition',compact('terms'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function account()
    {
        return view('auth.account');
    }

    public function changepassword()
    {
        return view('auth.change-password');
    }

    public function saveContact(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|string',
			'mobile' => 'required',
            'comment' => 'required|string'

        ]);

        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->comment = $request->comment;
        $contact->save();
        return back()->with('flash_success_conact', 'Thank You We will get back to you');
    }

    public function get_City_State(Request $request)
	{


		$city= City::where(['postal_code' => $request->pincode])->first();
        if($city){
            $html='<option value="'.$city->id.'">'.$city->city.'</option>';
            $query= State::where(['id'=>$city->state_id])->first();
            $html_state='<option value="'.$query->id.'">'.$query->name.'</option>';
            $html_district=$city->district;
            $data['status']= true;
            $data['city']= $html;
            $data['state']= $html_state;
            $data['district']= $html_district;
            $data['message'] = 'Selected PinCode '.$request->pincode. ' is Valid';


        }else{
            $data['status']= false;
            $data['message'] = 'Selected PinCode '.$request->pincode. ' is Invalid';

        }


		return response()->json($data);
	}
    public function productlist(){
        $productlist=Product::select('name')->Where('status','Active')->get();
        //dd(productlist);
        $data =[];

        foreach ($productlist as $list){
            $data[]=$list['name'];
        }
        return $data;
    }
    public function searchproduct(Request $request){
       // dd($request->all());
        $searched_product=$request->product_name;

        if ($searched_product !="")
        {
            $data= Product::Where("name","LIKE","%$searched_product%")->first();
            if($data){
                return redirect('product-details/'.$data->slug);
            }
            else{
                return redirect()->back()->with('status','searched product not found');
            }

        }
        else{
            return redirect()->back();
        }
    }
}
