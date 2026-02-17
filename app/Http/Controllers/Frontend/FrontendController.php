<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banners = Banner::where('status', 1)->get();
        $products = Product::where('status', 1)->take(8)->get();
        $new_collection = Product::where('status', 1)->orderBy('created_at', 'desc')->take(4)->get();
        return view('frontend.pages.home.index', compact('banners', 'products', 'new_collection'));
    }

    public function shop(){
        $products = Product::where('status', 1)->with('category')->take(8)->get();
        return view('frontend.pages.shop.index', compact('products'));
    }

    public function product($slug){
        $product = Product::where('slug', $slug)->where('status', 1)->firstOrFail();
        return view('frontend.pages.products.index', compact('product'));
    }

    public function checkout(){
        return view('frontend.pages.checkout.index');
    }

    public function cart(){
        return view('frontend.pages.cart.index');
    }
}
