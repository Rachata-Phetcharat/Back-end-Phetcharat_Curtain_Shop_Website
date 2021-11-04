<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bodycontroller extends Controller
{
    public function index(){
        return view('admin.body.index');
    }

    public function add(){
        return view('admin.body.from_add_bodys');
    }

    public function edit(){
        return view('admin.body.from_edit_bodys');
    }
}
