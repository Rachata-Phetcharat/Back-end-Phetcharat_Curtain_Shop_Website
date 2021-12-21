<?php

namespace App\Http\Controllers\front;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function product(){
        $product = Product::all();
        return view('front-end.product',compact('product'));
    }
}
