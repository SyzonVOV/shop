<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        //$products = Product::where('category_id', $category->id)->get(); les 5
        return view('category', compact('category'));
    }

    public function product($category, $product = null) {
        $prod = Product::where('code', $product)->first();
        //return view('product', ['product' => $product]);
        return view('product', ['product' => $prod]);
    }


}
