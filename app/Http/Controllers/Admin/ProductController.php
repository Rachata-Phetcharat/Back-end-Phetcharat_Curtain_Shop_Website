<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index');
    }

    public function add(){
        return view('admin.product.form_add_products');
    }

    public function edit(){
        return view('admin.product.from_edit_products');
    }
}
