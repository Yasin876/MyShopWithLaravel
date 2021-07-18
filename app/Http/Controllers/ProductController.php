<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('home')->with('products',$product);
    }

    public function show_product_detail($id){
        $product = Product::findOrFail($id);
        return view('productdetail')->with('product',$product);
    }


}
