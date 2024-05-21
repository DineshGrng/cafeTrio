<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\company;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    function home() {
        return view('frontend.index');
    }

    // function product($id) {
        // return 'hello';
        // $categories = Category::all();
        // $products = Product::all();
        // $products = Product::with('categories')->get();
        // $categories = Category::with('products')->get();
        // $categories = Category::with('products')->get();
        // return $categories;
        // $products = Http::get("https://www.themealdb.com/api/json/v1/1/filter.php?c=$id")['meals'];
        // return view('frontend.products' , compact('categories'));
    //     $categories = Category::find($id);
    //     $products = Product::all();
    //     return view('frontend.products', compact('products', 'categories'));
    //  }

    function categories($id) {
        $products = Product::all();
        $categories = Category::with('products')->find($id);
        // return $categories;
        return view('frontend.category', compact('categories','products'));
    }

    function about() {
        return view('frontend.about');
    }
    function contact() {
        return view('frontend.contact');
    }
}
