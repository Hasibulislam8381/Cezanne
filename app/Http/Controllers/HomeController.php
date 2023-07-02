<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Work;
use App\Models\Frame;
use App\Models\Artist;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Exhibition;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = Banner::all();
        $data = GeneralInfo::first();
        $blogs = Blog::orderBy('id', 'desc')->limit(6)->get();
        $products = Product::orderBy('id', 'desc')->limit(6)->get();
        $works = Work::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.index', compact('data', 'blogs','products','banner','works'));
    }
    public function admin()
    {

        return view('backend.index');
    }
    public function all_product()
    {
        $products = Product::orderBy('id', 'desc')->paginate(20);
        return view('frontend.pages.all_products',compact('products'));
    }
    public function product($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        return view('frontend.pages.product_details',compact('product'));
    }
    public function artist()
    {
        
        return view('frontend.pages.artist');
    }
    public function all_blogs()
    {
        $blogs = Blog::all();
        return view('frontend.pages.all_blogs',compact('blogs'));
    }
    public function blog_details($slug)
    {
        $blogs = Blog::where('slug',$slug)->firstOrFail();
        return view('frontend.pages.blog_details',compact('blogs'));
    }
    public function all_works()
    {
        $data=GeneralInfo::first();
        $works=Work::orderBy('id', 'desc')->paginate(20);
        return view('frontend.pages.all_works',compact('data','works'));
    }
    public function all_artist()
    {
       $artist = Artist::all();
        return view('frontend.pages.all_artist',compact('artist'));
    }
    public function all_glance()
    {
        return view('frontend.pages.all_glance');
    }
    public function carts()
    {
        return view('frontend.pages.carts');
    }
    public function wishlist()
    {
        return view('frontend.pages.wishlist');
    }
    public function frame()
    {
        $frames=Frame::orderBy('id', 'desc')->paginate(20);
        return view('frontend.pages.frame',compact('frames'));
    }
    public function exhibition()
    {
        $exhibitions=Exhibition::paginate(3);
        return view('frontend.pages.exhibition',compact('exhibitions'));
    }
    public function gallery()
    {
        $products = Product::orderBy('id', 'desc')->paginate(20);
        return view('frontend.pages.gallery',compact('products'));
    }
    public function user_dashboard()
    {
        return view('frontend.user.index');
    }
    public function user_profile()
    {
        return view('frontend.user.profile');
    }
    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
    public function privacy()
    {
        return view('frontend.pages.privacy');
    }
    public function terms_and_condition()
    {
        return view('frontend.pages.terms_and_condition');
    }
    public function return_policy()
    {
        return view('frontend.pages.return_policy');
    }
    public function purchaseHistory()
    {
        return view('frontend.user.purchaseHistory');
    }
    public function orderView()
    {
        return view('frontend.user.order_view');
    }
}
