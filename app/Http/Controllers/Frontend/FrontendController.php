<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.home.index');
    }

    public function shop(){
        return view('frontend.pages.shop.index');
    }

    public function checkout(){
        return view('frontend.pages.checkout.index');
    }
}
