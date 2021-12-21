<?php

namespace App\Http\Controllers\front;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function index(){
        $product = Product::all();
        return view('welcome',compact('product'));
    }
}
