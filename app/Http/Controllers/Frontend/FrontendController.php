<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banners = Banner::where('status', 1)->get();
        return view('frontend.pages.home.index', compact('banners'));
    }

    public function shop(){
        return view('frontend.pages.shop.index');
    }

    public function checkout(){
        return view('frontend.pages.checkout.index');
    }

    public function cart(){
        return view('frontend.pages.cart.index');
    }
}
