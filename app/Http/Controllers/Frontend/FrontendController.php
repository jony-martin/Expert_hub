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
        // Fetch unique categories
        $categories = $products->pluck('category.name')->unique()->filter()->values();

        // Fetch unique sizes (explode comma-separated strings and flatten)
        $sizes = $products->whereNotNull('size')->pluck('size')->map(function($s) {
            return explode(',', $s);
        })->flatten()->unique()->filter()->values();

        // Fetch unique colors (explode comma-separated strings and flatten)
        $colors = $products->whereNotNull('color')->pluck('color')->map(function($c) {
            return explode(',', $c);
        })->flatten()->unique()->filter()->values();

        // Fetch min and max prices (using base_price or discount_price if available)
        $prices = $products->map(function($p) {
            return $p->discount_price ?? $p->base_price;
        });
        $minPrice = $prices->min() ?? 0;
        $maxPrice = $prices->max() ?? 250;

        return view('frontend.pages.shop.index', compact('products', 'categories', 'sizes', 'colors', 'minPrice', 'maxPrice'));
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
