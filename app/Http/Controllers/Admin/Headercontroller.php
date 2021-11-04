<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Headercontroller extends Controller
{
    public function index(){
        return view('admin.header.index');
    }

    public function add(){
        return view('admin.header.from_add_headers');
    }

    public function edit(){
        return view('admin.header.from_edit_headers');
    }
}
